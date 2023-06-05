<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use App\Models\Songs;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Announcement;



class HomeControllerr extends Controller
{
    public function index ()
    {
        return view(view: "home._index");
    }

    public function music()
    {
        $users = Songs::all();
        return view('home._song', ['users' => $users]);
    }
    public function Announcement()
    {
        $users = Announcement::all();
        return view('home._announcement', ['users' => $users]);
    }

}
