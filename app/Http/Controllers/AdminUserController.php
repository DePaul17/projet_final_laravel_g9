<?php

namespace App\Http\Controllers;

use App\Models\User;
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
}
