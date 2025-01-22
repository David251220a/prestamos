@extends('layouts.admin')

@section('styles')
    <link href="{{asset('plugins/sweetalerts/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugins/sweetalerts/sweetalert.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    <div class="mt-4 seperator-header">
        <h4 class="fw-bold" style="font-weight: bold"> Crear Solicitud <i class="fa-solid fa-hand-holding-dollar"></i></h4>
    </div>

    <div class="row layout-spacing">
        @livewire('solicitud.crear-solicitud')
    </div>


@endsection

@section('js')
    <script src="plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="{{asset('js/persona/index.js')}}"></script>
@endsection

