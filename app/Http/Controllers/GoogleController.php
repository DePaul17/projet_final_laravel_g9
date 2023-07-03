<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

use Illuminate\Http\Request;

class GoogleController extends Controller
{
    //

    public function redirect (){
        return Socialite::driver('google')->redirect();
    }
    public function callback(){
        
        $SocialUser = Socialite::driver('google')->user();
        
        $user = User::updateOrCreate([
            'google_id' => $SocialUser->id,
        ], [
            'name' => $SocialUser->name,
            'email' => $SocialUser->email,
            'role' => 2,
            'google_token' => $SocialUser->token,   
        ]);
     
        Auth::login($user);
     
        return redirect('/dashboard');
    } 
}