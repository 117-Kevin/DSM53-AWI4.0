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
                                    <li class="breadcrumb-item active" aria-current="page">Mostrar</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
    <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Usuario</h4>
                                <div class="table-responsive">
                                    <table class="table user-table no-wrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Datos</th>
                                                <th class="border-top-0">Informacion</th>
                                            </tr>
                                        </thead>
                                        <tr>
                                            <td>Id</td>
                                            <td>{{$users->id}}</td>
                                        </tr>
                                        <tr>
                                            <td>Tipo de usuario</td>
                                            <td>{{$users->typeuser_id}}</td>
                                        </tr>
                                        <tr>
                                            <td>Nombre</td>
                                            <td>{{$users->name}}</td>
                                        </tr>
                                        <tr>
                                            <td>E-mail</td>
                                            <td>{{$users->email}}</td>
                                        </tr>
                                        <tr>
                                            <td>Contraseña</td>
                                            <td>{{$users->password}}</td>
                                        </tr>
                                   
                                        
                                        
                                    </tbody>

                                    </table>
                                    <a class="btn btn-outline-success" m-3" href="/user" ><i class="fas fa-arrow-left"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@include('layouts.footer')