<?php

namespace App\Http\Controllers\Movie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function home()
    {
        $data = config('db');

        return view('home', compact('data'));
    }

    public function index()
    {
        $data = config('db');

        $movie = Movie::all();

        return view('movie/index', compact('data'));
    }
}
