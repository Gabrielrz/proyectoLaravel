@extends('plantilla.masterpage')

@section('contenido')


  {{-- @section('titulo',"crear propietarios") --}}


<div class="centrar">




  <!--Section: Contact v.2-->
<section class="mb-4">



    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="{{route('crearPropietario')}}" method="POST">
              {{csrf_field()}}
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="email" id="name" name="email" class="form-control">
                            <label for="name" class="">Tu Correo</label>
                        </div>
                        <div class="md-form mb-0">
                            <input type="password" id="name" name="pass" class="form-control">
                            <label for="name" class="">tu contraseña</label>
                        </div>
                    </div>
                    <!--Grid column-->


                    <!--Grid column-->

                </div>

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary btn-dark text-white" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        {{-- <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Bilbao</p>
                </li>
                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+ 01 234 567 89</p>
                </li>
                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>contact@mdbootstrap.com</p>
                </li>
            </ul>
        </div> --}}
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->
</div>

@stop
