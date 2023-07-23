<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Projet;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    
    //
    public function charts()
    {
        return view('wp-admin/pages/charts');
    }

    
    public function chatAdmin()
    {
        return view('wp-admin/pages/chatsAdmin');
    }

    public function index()
    {
        $users = User::all();

        // Initialiser les tableaux d'utilisateurs simples et d'utilisateurs Google
        $simpleUsers = [];
        $googleUsers = [];

                // Filtrer les utilisateurs par type d'inscription
        foreach ($users as $user) {
            if ($user->google_id === null) {
                $simpleUsers[] = $user;
            } else {
                $googleUsers[] = $user;
            }
        }
        return view('wp-admin/pages/listeUsers', compact('simpleUsers', 'googleUsers'));
    }

    public function displayUserProjects($userId)
    {
        $user = User::find($userId);
        $projets = $user->projet()->where('etat', 1)->get(); // Récupérer les projets en attente de l'utilisateur
        $projetencours = $user->projet()->where('etat', 2)->get(); // Récupérer les projets en cours de l'utilisateur
        $projets_termines = $user->projet()->where('etat', 3)->get(); // Récupérer les projets terminés de l'utilisateur
        $archive = $user->projet()->where('etat', 4)->get(); // Récupérer les projets archivés de l'utilisateur

        $isAdmin = $user->role === 1; // Vérifier si le rôle de l'utilisateur est égal à 2 (admin)

        return view('/listproject', compact('projets', 'projetencours', 'projets_termines', 'archive', 'user', 'isAdmin'));
    }


}
