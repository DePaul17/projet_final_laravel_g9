<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    
    public function menue(){

        return view('user/contact');

    }

    public function menued(){

        return view('wp-admin/Menue');

    }

    public function menuef(){

        return view('wp-admin/Menuef');

    }

    public function pro (){
        return view('versionpro');
    }

    public function payement (){
        return view('formPayement');
    }


    
    
}
