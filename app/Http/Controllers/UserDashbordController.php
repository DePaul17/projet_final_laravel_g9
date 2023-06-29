<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashbordController extends Controller
{
    //

    function UserDashbord (){

        return ('user/user');
    }

    public function form_add()
    {
        return view('addtask');
    }
}

