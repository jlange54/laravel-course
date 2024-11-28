<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class LoginContoller extends Controller
{
    public function create(): \Illuminate\Contracts\View\View
    {
        return View::make('auth.login');
    }
}
