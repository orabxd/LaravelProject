@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">

        <div>
            <div class="col-xl-20 mb-5 mb-xl-0">
                <div class="card bg-gradient-gray shadow">


        <div class="row">
            <div class="col-xl-8 mb--9 mb-xl-0">
                <div class="card bg-gradient-default shadow">

                    <div class="card-header bg-transparent">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3896.220731287253!2d-86.8783579!3d12.4350086!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sni!4v1572990459789!5m2!1ses!2sni" width="730" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

                        <div class="row align-items-xl-stretch">


                            </div>

                            </div>
                        </div>
                    </div>

                    <div class="card">

                        <div class="card-body">
                            <div class="jumbotron bg-green" >

                                    <h1>DATOS DE COMPRA</h1>

                            </div>
                                <div class="form-group">
                                    <input type="text" name="apellidos" class="form-control"
                                           placeholder="Nombre" autofocus>
                                    <label></label>
                                    <div class="form-group">
                                        <input type="text" name="apellidos" class="form-control"
                                               placeholder="Direc. Local" autofocus>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">


                                            <a class="nav-link" href="{{ route('Articulos') }}">
                                                <i class="bg-green text-primary"></i> {{ __('Articulos') }}
                                            </a>

                                    <button type="button" class="btn btn-success">Pago</button>
                                    <button type="button" class="btn btn-success">Entrega</button>


                                        </div>
                                    </div>


                                    <button type="button" class="btn btn-primary btn-lg">Large</button>

                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="card">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
