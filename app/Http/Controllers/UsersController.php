<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;


class UsersController extends Controller
{
    function index()
    {
        return view('users.index');
    }

    function list()
    {
        // return response()->json(User::all(), 200);
        return response()->json(User::latest()->paginate(10), 200);
    }

}
