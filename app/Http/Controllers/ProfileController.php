<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = array(
            'name' => auth()->user()->name,
            'email' => auth()->user()->email,
            'id' => auth()->user()->id
        );
        return view('profile/index', compact('data'));
    }


}
