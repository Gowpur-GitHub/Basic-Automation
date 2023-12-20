<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'SPK WP | Data Users';
        $users = User::get();

        return view('dashboard.user.index', compact('title', 'users'));
    }
}
