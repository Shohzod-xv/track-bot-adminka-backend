<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $langs = Language::all();
        return view('welcome', compact('langs'));
    }
}
