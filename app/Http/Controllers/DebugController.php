<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DebugController extends Controller
{
    public function debug(Request $request)
    {
        $data = $request->all();
        dd($data); // Debugging statement
    }
}
