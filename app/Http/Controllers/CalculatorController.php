<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function addition(int $sum1, int $sum2) {
       return $sum1 + $sum2;
    }

    public function subtraction(int $sum1, int $sum2) {
        return $sum1 - $sum2;
    }
}
