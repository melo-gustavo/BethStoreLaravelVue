<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class UserController extends Controller
{
    // public function index(Request $request){
    //     return Inertia::render('UserIndex', [
    //         'canCreateUser' => Auth::user()->can('create', User::class),
    //         'users' => User::all()
    //     ]);
    // }

    // public function create(Request $request){
    //     $this->authorize('create', User::class);
    //     return Inertia::render('CreateUser');
    // }
}
