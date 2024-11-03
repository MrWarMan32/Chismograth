<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index ()
    {
        return "Aqui se mostraran los post" ;
    }

    public function create ()
    {
        return "Aqui se mostraran los formilarios para crear posts" ;
    }

    public function show ($post)
    {
        return "Aqui se mostrara el post {$post}" ;
    }
    
}
