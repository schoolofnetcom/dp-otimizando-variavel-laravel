<?php

namespace App\Http\Controllers;
use App\Models\User;

class GeneralController extends Controller
{
    // private $users;

    // public function __construct() {
    //     $this->users = User::all();
    // }

    public function primeira() {
        // $users = User::all();
        // return view('primeira', compact('users'));
        // return view('primeira', ['users' => $this->users]);
        return view('primeira');
    }

    public function segunda() {
        return view('segunda');
    }

    public function terceira() {
        return view('terceira');
    }

    public function quarta() {
        return view('quarta');
    }

    public function quinta() {
        return view('quinta');
    }
}
