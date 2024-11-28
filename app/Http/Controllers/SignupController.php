<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class SignupController extends Controller
{
    public function create(): \Illuminate\Contracts\View\View
    {
        return View::make('auth.signup');
    }
}
