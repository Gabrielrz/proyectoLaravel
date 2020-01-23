{{-- mesnsajes de validadores (errores) y mensajes flash
    $errors=first();//para el primer error
    $errors->first('nameErr') para un error en concreto
    $errors->any() para preguntar si hay errores
    $errors->all() oara obtener todos los mensajes de validacion
 --}}


  @if ($errors->any())
      @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
          {{$error}}
        </div>
      @endforeach
  @endif
