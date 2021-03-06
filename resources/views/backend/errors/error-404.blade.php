@extends('backend.layouts.main')
@section('title') {{ 'ERROR 404 | '.env('APP_NAME') }} @endsection

@push('before-css')
@endpush

@section('content')
    <div class="error-box">
        <div class="error-body text-center">
            <h1 class="error-title">404</h1>
            <h3 class="text-uppercase error-subtitle">PAGE NOT FOUND !</h3>
            <p class="text-muted my-3">YOU SEEM TO BE TRYING TO FIND HIS WAY HOME</p>
            <a href="{{asset('error-404')}}" class="btn bg-gradient-primary text-white btn-rounded waves-effect waves-light mb-5">Back
                to home</a>
        </div>
    </div>

@endsection

@push('js')
    <!-- This Page JS -->
    <script>
        $('[data-toggle="tooltip"]').tooltip();
        $(".preloader").fadeOut();
    </script>
@endpush
