<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twig;

class WelcomeController extends Controller
{
    public function showWelcome()
    {
        return Twig::render('welcome', ['name' => 'World']);
    }

    public function index()
    {
        return view('welcome');
    }
}
