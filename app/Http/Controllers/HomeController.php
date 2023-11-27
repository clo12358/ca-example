<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function __construct() {
        $this->middleware('auth');

    }

    public function index() {
        $user = Auth::user();
        $home = 'home';
        // dd($user);

        if($user->hasRole('admin')) {
            //do admin stuff
            $home = 'admin.home';
        }
        else if($user->hasRole('user')) {
            //do user stuff
            $home = 'user.home';
        }

        return view($home);
        // return redirect()->route($home);
    }
}
