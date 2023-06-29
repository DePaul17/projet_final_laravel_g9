<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projet;
use App\Models\Tache;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

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
