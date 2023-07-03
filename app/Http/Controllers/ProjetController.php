<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use App\Models\Projet;
use App\Models\Tache;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

    
class ProjetController extends Controller
{

    public function show($id)
    {
        $projet = Projet::find($id);
        $taches = Tache::where('projet_id', $id)->get();
        return view('etapetask', compact('projet', 'taches'));
    }

    public function addtask_form()
    {
        return view('/addtask');
    }

    public function yomis()
    {
        return view('/yomibot');
    }
    public function ChatsUser()
    {
        return view('/ChatsUser');
    }

    public function traitement_addtask(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'libelle' => 'required|string',
            'description' => 'required|string',
            'datedebut' => 'required|date',
            'datefin' => 'nullable|date',
        ]);

        // Création d'un nouvel objet Projet avec les données du formulaire
        $projet = new Projet();
        $projet->libelle = $request->input('libelle');
        $projet->description = $request->input('description');
        $projet->datedebut = $request->input('datedebut');
        $projet->datefin = $request->input('datefin');
        $projet->etat = 1; // État par défaut à 1
        $projet->user_id = Auth::id(); // Récupération de l'id de l'utilisateur connecté

        // Sauvegarde du projet dans la base de données
        $projet->save();

        // Redirection vers la page souhaitée après l'ajout du projet
        return redirect()->back()->with('message', 'Le projet a été ajouté avec succès. Retrouvez le dans la section liste des projets.');
    }

    public function listtask_form()
    {
        // Récupération de l'id de l'utilisateur connecté
        $userId = Auth::id();

        // Récupération des projets correspondant à l'id utilisateur et à l'état 1
        $projets = Projet::where('user_id', $userId)
            ->where('etat', 1)
            ->get();
    
        return view('listtask', compact('projets'));
    }

    public function updatetache_form($id)
    {
        $tache = Tache::find($id);
        return view('updatetache', compact('tache'));
    }x


    public function update_tache(Request $request, $id)
    {
        $tache = Tache::findOrFail($id);

        $request->validate([
            'libelle' => 'required',
        ]);

        $tache->libelle = $request->input('libelle');

        $tache->save();

        return redirect('/listtask');
    }

    public function updateState(Request $request)
    {
        $projetId = $request->input('projet_id');

        // Recherchez le projet correspondant à l'ID
        $projet = Projet::find($projetId);

        if ($projet) {
            // Mettez à jour l'état du projet à 2
            $projet->etat = 2;
            $projet->save();

            return redirect()->back()->with('success', 'L\'état du projet a été mis à jour avec succès.');
        } else {
            return redirect()->back()->with('error', 'Le projet n\'a pas été trouvé.');
        }
    }
    public function downloadPDF($projet)
    {
        // Récupérez les données du projet et des tâches associées
        $projet = Projet::findOrFail($projet);
        $taches = $projet->taches;
        
        // Générez le contenu du PDF avec le logo et le nom de l'application centrés
        $html = '<div style="text-align: center;">';
            $html .= '<h1 style="color: blue;">TaskEasy</h1>';
            $html.= '<br>';
            $html.= '<br>';
            $html .= '<h2>Projet: '.$projet->libelle.'</h2>';
            $html .= '<p>Description: '.$projet->description.'</p>';
            $html .= '<p>Date de début: '.$projet->datedebut.'</p>';
            $html .= '<p>Date de fin: '.$projet->datefin.'</p>';
            $html .= '<h3>Tâches:</h3>';
            if ($taches === null || $taches->isEmpty()) {
                $html .= '<p>Aucune tâche pour ce projet.</p>';
            } else {
                foreach ($taches as $tache) {
                    $html .= '<p>'.$tache->libelle.'</p>';
                }
            }
        $html .= '</div>';
        
        // Initialisez Dompdf
        $dompdf = new Dompdf();
        
        // Définir les options de rendu du PDF
        $options = new \Dompdf\Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        
        // Appliquer les options à l'instance Dompdf
        $dompdf->setOptions($options);
        
        // Charger le contenu HTML
        $dompdf->loadHtml($html);
        
        // Définir le papier et l'orientation du PDF
        $dompdf->setPaper('A4', 'portrait');
        
        // Rendre le contenu en PDF
        $dompdf->render();
        
        // Générer un nom de fichier unique pour le PDF
        $filename = $projet->libelle . '-Taskeasy_' . '.pdf';
        
        // Enregistrer le PDF sur le serveur temporairement
        $output = $dompdf->output();
        $path = sys_get_temp_dir() . '/' . $filename;
        file_put_contents($path, $output);
        
        // Créer une réponse binaire pour le téléchargement du fichier PDF
        $response = new BinaryFileResponse($path);
        
        // Définir les en-têtes pour le téléchargement du fichier
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $filename
        );
        
        // Supprimer le fichier PDF temporaire après le téléchargement
        $response->deleteFileAfterSend(true);
        
        return $response;
    }

    public function updateState_first(Request $request)
    {
        $projetId = $request->input('projet_id');

        // Recherchez le projet correspondant à l'ID
        $projet = Projet::find($projetId);

        if ($projet) {
            // Retourner l'état du projet à 1
            $projet->etat = 1;
            $projet->save();

            return redirect()->back()->with('success', 'L\'état du projet a été mis à jour avec succès.');
        } else {
            return redirect()->back()->with('error', 'Le projet n\'a pas été trouvé.');
        }
    }

    public function verifyPassword(Request $request)
    {
        $request->validate([
            'password' => 'required',
        ]);
    
        $user = Auth::user();
    
        if (Hash::check($request->password, $user->password)) {
            // Mot de passe correct
            return redirect('/archive'); 
        } else {
            // Mot de passe incorrect
            return redirect()->back()->with('message', 'Mot de passe incorrect');
        }
    }
    public function updateState_hidden(Request $request)
    {
        $projetId = $request->input('projet_id');

        // Recherchez le projet correspondant à l'ID
        $projet = Projet::find($projetId);

        if ($projet) {
            // Retourner l'état du projet à 1
            $projet->etat = 4;
            $projet->save();

            return redirect()->back()->with('success', 'L\'état du projet a été mis à jour avec succès.');
        } else {
            return redirect()->back()->with('error', 'Le projet n\'a pas été trouvé.');
        }
    }
    public function details_form($id)
    {
        $userId = Auth::id();

        // Récupérer le projet spécifique
        $projet = Projet::findOrFail($id);

        // Récupérer les projets terminés liés à l'utilisateur
        $projets_termines = Projet::where('user_id', $userId)
                                    ->where('id', '=', $id)
                                    ->where('etat', 3)
                                    ->get();

        $taches = Tache::where('projet_id', $id)->get();

        // Retourner la vue avec les données récupérées
        return view('/details', compact('projet', 'projets_termines', 'taches'));

    }
    public function updateState_finish(Request $request)
    {
        $projetId = $request->input('projet_id');

        // Recherchez le projet correspondant à l'ID
        $projet = Projet::find($projetId);

        if ($projet) {
            $dateDebut = Carbon::parse($projet->datedebut); // Convertit la date de début du projet en objet Carbon
            $dateActuelle = Carbon::now();

            if ($dateActuelle->lessThan($dateDebut)) {
                // La date actuelle est antérieure à la date de début du projet
                return redirect()->back()->with('error', 'Vous n\'avez pas encore atteint la date de début du projet.');
            }

            // Mettez à jour l'état du projet à 3
            $projet->etat = 3;

            if ($dateDebut->lessThan($dateActuelle)) {
                // La date de début du projet est antérieure à la date actuelle
                $projet->datefin = $dateActuelle; // Récupère la date actuelle
            }

            $projet->save();

            return redirect()->back()->with('success', 'L\'état du projet a été mis à jour avec succès.');
        } else {
            return redirect()->back()->with('error', 'Le projet n\'a pas été trouvé.');
        }
    }

    public function taskencours_form()
    {
        // Récupération de l'id de l'utilisateur connecté
        $userId = Auth::id();

        // Récupération des projets correspondant à l'id utilisateur et à l'état 2
        $projetencours = Projet::where('user_id', $userId)
            ->where('etat', 2)
            ->get();

        return view('taskencours', compact('projetencours'));
    }

    public function finishtask_form()
    {
        // Récupération de l'id de l'utilisateur connecté
        $userId = Auth::id();

        // Récupération des projets correspondant à l'id utilisateur et à l'état 2
        $projets_termines = Projet::where('user_id', $userId)
            ->where('etat', 3)
            ->get();

        return view('finishtask', compact('projets_termines'));
    }

   

    public function traitement_addtache(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'libelle' => ['required','string', 'max:255',],
            'projet_id' => ['required',],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Tache::create($request->all());


        return redirect()->back()->with('success', 'Tache ajouté avec succès.');
    }

    public function destroy_tache($id)
    {
        $element = Tache::findOrFail($id);
        $element->delete();
        return redirect()->back();
    }

    public function destroy_task($id)
    {
        $element = Projet::findOrFail($id);
        $element->delete();
        return redirect()->back();
    }  

    public function destroy_taskencours($id)
    {
        $element = Projet::findOrFail($id);
        $element->delete();
        return redirect()->back();
    }  
}
