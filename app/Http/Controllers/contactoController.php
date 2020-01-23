<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\contacto;
class ContactoController extends Controller
{
    //tienen acciones=funciones



    public function index() {

      return view('paginas.contacto',['mensaje'=>'pagina de contacto']);
    }



    public function procesar(Request $request){

      //TODO: recoger datos y enviar correo

      $contacto=new contacto();
      $contacto->nombre=$request->input('name');
      $contacto->correo=$request->input('email');
      $contacto->asunto=$request->input('subject');
      $contacto->mensaje=$request->input('message');
      $contacto->save();
      return "mensaje enviado";
    }







}
