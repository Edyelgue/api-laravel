<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // Retorna todos os usuários no formato JSON
        return response()->json(User::all(), 200);
    }
}
