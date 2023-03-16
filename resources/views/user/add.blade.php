@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection
<div class="page-wrapper">
            <!-- Parte de arriba -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Usuario</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item"><a href="/user">Usuario</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Agregar</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

    <div class="container-fluid">
        <h2>Agregar usuario</h2>
        <div class="card-body">

                    <form action="/user" method="POST">
                        {!!csrf_field()!!}
                        <label for=""> Tipo de usuario:</label>
                        <select class="form-control form-select" aria-label="Default select example" name="typeuser_id">
                            <option selected>Elige el tipo de usuario</option>
                                @foreach($typeusers as $typeuser)   
                            <option value={{$typeuser->id}}>{{$typeuser->name}}</option>
                               @endforeach
                            </select>
                        <label for=""> Nombre:</label>
                        <input class="form-control" type="text" name="name" id="name">
                        <label for=""> Correo:</label>
                        <input class="form-control" type="text" name="email" id="email">
                        <label for=""> Contraseña:</label>
                        <input class="form-control" type="text" name="password" id="password">
                        <div class="row">
                            <a class="btn btn-danger m-3"  href="/user" >Cancelar</a>
                            <button type="submit" class="btn btn-primary m-3">Guadar</button>
                        </div>
                    </form>
                    <!-- </div> -->
                </div>
    </div>

@include('layouts.footer')