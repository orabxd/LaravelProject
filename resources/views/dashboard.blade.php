@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d50868.0310547529!2d-86.91017516101839!3d12.436289992745335!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sni!4v1571787371590!5m2!1ses!2sni" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>

    <td>
        <div class="d-flex align-items-center">
            <span class="mr-2">30%</span>
            <div>
                <div class="progress">
                    <div class="progress-bar bg-gradient-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
                </div>
            </div>
        </div>
    </td>

    @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
