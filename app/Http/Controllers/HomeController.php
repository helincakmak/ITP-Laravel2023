<?php

namespace App\Http\Controllers;


use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view(view: 'home.index');
    }

    public function login()
    {
        return view(view: 'admin.login');
    }





    public function test($id)
    {
       echo "id number: ", $id;
    }
}
