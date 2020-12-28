<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\User;

class UserComposer
{
    public function compose(View $view)
    {
        $view->with('users', User::all());
    }
}
