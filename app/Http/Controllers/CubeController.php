<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CubeController extends Controller
{
    public function index(Request $request)
    {
        $basicNum = $request->input('number');
        $cubeNum = $basicNum * $basicNum * $basicNum;
        
        return $cubeNum;
    }
}
