@extends('plantilla.masterpage')

@section('contenido')


  {{-- @section('titulo',"crear propietarios") --}}


<div class="centrar">




  <!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contactanos</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">¿Tienes una pregunta?</p>

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
                            <input type="text" id="name" name="nombre" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="apellido" class="form-control">
                            <label for="name" class="">tu apellido</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="edad" class="form-control">
                            <label for="email" class="">tu edad</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="file" id="subject" name="imagen" class="form-control">
                            <label for="subject" class="">imagen avatar</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">
                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">tu mensaje</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

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
