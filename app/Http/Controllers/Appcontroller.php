<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Appcontroller extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
