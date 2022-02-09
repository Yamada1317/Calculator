<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SquaredController extends Controller
{
    public function index(Request $request)
    {
        $basicNum = $request->input('number');
        $squaredNum = $basicNum * $basicNum;
        
        return $squaredNum;
    }
}
