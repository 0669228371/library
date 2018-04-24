<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class MyController extends Controller
{
    public function show()
    {


        $authors = Author::all();

        return view('index', ['authors' => $authors]);
    }
}
