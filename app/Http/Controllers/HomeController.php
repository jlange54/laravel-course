<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View
    {
        return View::make('index');
    }
}
