<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index()
    {
        $code = 'echo "Hello, World!";';
        eval($code); // This is a bad practice
    }
}
