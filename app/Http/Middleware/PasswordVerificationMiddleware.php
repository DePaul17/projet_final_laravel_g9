<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordVerificationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        if (!$user) {
            // L'utilisateur n'est pas connecté, retourne une page d'erreur 403
            return redirect()->back()->with('message', 'Accès interdit');
        }

        // Vérifier la variable de session seulement si la session est démarrée
        else if ($request->session()->isStarted() && !$user->verifyPassword && !$request->session()->has('password_verified')) {
            // L'utilisateur est connecté mais n'a pas activé le formulaire d'archive
            // et n'a pas encore vérifié le mot de passe
            // Retourner une page d'erreur 403
        }

        return $next($request);
    }
}
