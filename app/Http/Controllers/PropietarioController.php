<?php

namespace App\Http\Controllers;

use Validator;
use App\Propietario;
use Illuminate\Http\Request;

class PropietarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
       $this->middleware('amin');
     }


    public function index()
    {
        $propietarios=Propietario::all();
        //cargar la vista y enviarle los propietarios

        /*foreach ($propietarios as $propietario) {
            echo "<p>".$propietario->nombre." ".$propietario->apellidos."</p>";
        }*/


        return view('paginas.propietarios',['propietarios'=>$propietarios] );
    }
    public function indexPgForm()
    {
      return view('paginas.crearPropietario');
    }

    public function indexFiltrado($user)
    {

      $propietarios=Propietario::where('apellidos',$user)
                                ->orderBy('nombre','asc')
                                ->take(3)
                                ->get();

      foreach ($propietarios as $propietario) {
          echo "<p>".$propietario->nombre." ".$propietario->apellidos."</p>";
      }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function crear(Request $request)
    {
      $errors=$this->validar($request->all());
      if($errors==null){
          //guardar el propietario en la BD
          $propietario=new Propietario();
          $propietario->nombre=$request->input('nombre');
          $propietario->apellidos=$request->input('apellido');
          $propietario->edad=$request->input('edad');
          $propietario->image_url=$request->input('imagen');
          $propietario->save();
          echo "Propietario creado.";
          echo "<a href='http://localhost/proyectoLaravel/public/propietarios'>pruebalo</a>";
        }else{
          return view('paginas.crearPropietario',['errors'=>$errors]);
        }
    }
    public function validar($values)
    {
      //nombre apellidos -texto
      //edad -numero
      //imagen -resolucion mazima 1024*1024 de 1mb
      $rules = array(
                  'nombre'    => 'required',
                  'apellidos' => 'required',
                  'edad'      => 'required|numeric',
                  'imagen'    => 'image|max:1024*1024*1',
                );
      $messages = array(
                        'nombre.required'   => 'el nombre es obligatorio',
                        'apellidos.required'=> 'los apellidos son obligatorios',
                        'edad.required'     => 'la edad es obligatoria',
                        'edad.numeric'      => 'la edad tiene que ser un numero',
                        'imagen.image'      => 'el formato de imagen no es valido',
                        'imagen.max'        => 'la resolucion o el peso de la imagen exeden el maximo',
                  );
      $validator=Validator::make($values,$rules,$messages);
      if($validator->fails()){
        //no se ha pasado el validador(alguna regla incumplida)
        $errors = $validator->messages();
        $errors->add("mierror","se ha cancelado la creacion del propietario");
        return $errors;
      }else{
        return null;
      }


    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Propietario  $propietario
     * @return \Illuminate\Http\Response
     */
    public function show(Propietario $propietario)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Propietario  $propietario
     * @return \Illuminate\Http\Response
     */
    public function edit(Propietario $propietario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Propietario  $propietario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Propietario $propietario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Propietario  $propietario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Propietario $propietario)
    {
        //
    }
}
