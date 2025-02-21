<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function getUser(Request $request)
    {
        $userId = $request->input('user_id');
        $user = DB::select("SELECT * FROM users WHERE id = $userId"); // This is vulnerable to SQL injection
        return response()->json($user);
    }
}
