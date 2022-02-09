<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CircleController extends Controller
{
    public function index(Request $request)
    {
        $basicNum = $request->input('number');
        $circleNum = ($basicNum * $basicNum ) * 3.14;        
        return $circleNum;
    }
}
