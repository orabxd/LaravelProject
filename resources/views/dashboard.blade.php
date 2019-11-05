@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
<<<<<<< HEAD
        <div>
            <div class="col-xl-20 mb--9 mb-xl-0">
                <div class="card bg-gradient-green shadow">
=======
        <div class="row">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card bg-gradient-default shadow">
>>>>>>> 4600d8dfea0e2731d3d9eb925063401c4dc9328d
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            </div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3896.220731287253!2d-86.8783579!3d12.4350086!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sni!4v1572990459789!5m2!1ses!2sni" width="1150" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Chart -->
                        <div class="chart">
                            <!-- Chart wrapper -->
                            <canvas id="chart-sales" class="chart-canvas"></canvas>
                        </div>
                    </div>
                </div>
            </div>

                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Plataforma</th>
                                    <th scope="col">Visitas</th>
                                    <th scope="col">Usuarios únicos</th>
                                    <th scope="col">Tasa de entradas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        /argon/
                                    </th>
                                    <td>
                                        4,569
                                    </td>
                                    <td>
                                        340
                                    </td>
                                    <td>
                                        <i class="fas fa-arrow-up text-success mr-3"></i> 46,53%
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        /argon/index.html
                                    </th>
                                    <td>
                                        3,985
                                    </td>
                                    <td>
                                        319
                                    </td>
                                    <td>
                                        <i class="fas fa-arrow-down text-warning mr-3"></i> 46,53%
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        /argon/charts.html
                                    </th>
                                    <td>
                                        3,513
                                    </td>
                                    <td>
                                        294
                                    </td>
                                    <td>
                                        <i class="fas fa-arrow-down text-warning mr-3"></i> 36,49%
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        /argon/tables.html
                                    </th>
                                    <td>
                                        2,050
                                    </td>
                                    <td>
                                        147
                                    </td>
                                    <td>
                                        <i class="fas fa-arrow-up text-success mr-3"></i> 50,87%
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        /argon/profile.html
                                    </th>
                                    <td>
                                        1,795
                                    </td>
                                    <td>
                                        190
                                    </td>
                                    <td>
                                        <i class="fas fa-arrow-down text-danger mr-3"></i> 46,53%
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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