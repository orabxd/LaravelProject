@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">

        <div>
<<<<<<< HEAD
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
                    <div class="card-body">
=======
            <div class="col-xl-8 mb--9 mb-xl-0">
                <div class="card bg-gradient-green shadow">

                    <div class="card-body">
                        <!-- Chart -->
                        <div class="chart">
                            <!-- Chart wrapper -->
                            <canvas id="chart-sales" class="chart-canvas"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted ls-1 mb-1">Performance</h6>
                                <h2 class="mb-0">Total orders</h2>
                            </div>
                        </div>
>>>>>>> 84ea877519c42a0995bf3db2171e798b4ba2012f
                    </div>
                    <div class="card-body">
                        <!-- Chart -->

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
