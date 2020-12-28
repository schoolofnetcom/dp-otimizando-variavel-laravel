<?php

namespace App\Http\Controllers;
use App\Models\User;

class GeneralController extends Controller
{
    public function primeira() {
        $users = User::all();
        return view('primeira', compact('users'));
    }

    public function segunda() {
        $users = User::all();
        return view('segunda', compact('users'));
    }

    public function terceira() {
        $users = User::all();
        return view('terceira', compact('users'));
    }

    public function quarta() {
        $users = User::all();
        return view('quarta', compact('users'));
    }

    public function quinta() {
        $users = User::all();
        return view('quinta', compact('users'));
    }
}
