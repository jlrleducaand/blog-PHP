<?php

namespace App\Http\Controllers;

class PostController
{
    // Controlador de un solo metodo o una sola accion solo se llama al controlador sin nombre de metodo
    public function __invoke()
    {
        $posts = [
            ['title' => 'First Post'],
            ['title' => 'Second Post'],
            ['title' => 'Third Post'],
            ['title' => 'Fourth Post'],
        ];
        return view('blog', ['posts' => $posts]);
    }
    // Controlador de varios metodos se llama al controlador  y despues el metodo
    public function index(){
        $posts = [
            ['title' => 'First Post'],
            ['title' => 'Second Post'],
            ['title' => 'Third Post'],
            ['title' => 'Fourth Post'],
        ];
        return view('blog', ['posts' => $posts]);
    }
}
