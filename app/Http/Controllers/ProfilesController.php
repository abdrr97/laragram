<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;

class ProfilesController extends Controller
{
    public function index($id)
    {
        $user = User::findOrFail($id);

        return view('profiles.index', [
            'user' => $user
        ]);
    }
}
