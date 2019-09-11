@extends('backend.layouts.app')
@section('title') {{ 'Edit Main | '.env('APP_NAME') }} @endsection

@section('breadcrumbs')
    @include('backend.layouts.partials.breadcrumbs',['current' => 'Edit Main #'.$main->id ])
@endsection

@push('before-css')

@endpush
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($main, [
                            'method' => 'PATCH',
                            'url' => ['/main/main', $main->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('main.main.form', ['formMode' => 'edit'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
