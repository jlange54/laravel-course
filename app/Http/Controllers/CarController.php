<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function __invoke(Request $request){
        return "__invoke";
    }

    public function index(): string
    {
        return 'Index';
    }
}
