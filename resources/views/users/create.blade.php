@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <h1>Crear Usuarios</h1>
@stop

@section('content')
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @include('users.form_create')
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin_custom.css') }}">
@stop

@section('js')
    {{--    <script> console.log('Hi!'); </script>--}}
@stop
