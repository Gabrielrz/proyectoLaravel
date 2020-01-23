<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    //tienen acciones=funciones



    public function index() {
      //acceso a bd,modelo
      return view('paginas.inicio');
    }







}
