<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    function welcome(Request $request){
        Log::info("Bienvenido al log de laravel");
        Log::info(print_r($request->all(), 1));
        return view('welcome');
    }

    function testView(Request $request){
        //libros
        $libros = [
            'libro1' => 'El señor de los anillos',
            'libro2' => 'Harry Potter',
            'libro3' => 'Cien años de soledad',
            'libro4' => 'El principito',
            'libro5' => 'Don Quijote de la Mancha',
        ];
        //return view('test', ['libros' => $libros]);
        return view('test', compact('libros'));

    }
}
