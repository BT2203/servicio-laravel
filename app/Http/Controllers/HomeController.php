<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $respuesta = Http::get('https://jsonplaceholder.typicode.com/posts/1/comments');
        $datos = $respuesta->json();
        return view('home',compact('datos'));
    }
}
