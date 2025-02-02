@extends('layouts.admin')

@section('styles')
    <link href="{{asset('assets/css/components/custom-modal.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugins/animate/animate.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/select2/select2.min.css')}}">
    <link href="{{asset('assets/css/dashboard/dash_1.css')}}" rel="stylesheet" type="text/css" />
    {{-- <link href="{{asset('plugins/loaders/custom-loader.css')}}" rel="stylesheet" type="text/css" /> --}}
@endsection

@section('content')

    <div class="mt-4 seperator-header">
        <h4 class="fw-bold" style="font-weight: bold">Crear Solicitud: {{number_format($persona->documento, 0, ".", ".")}} - {{$persona->nombre}} {{$persona->apellido}} </h4>
    </div>

    <div class="row layout-top-spacing">

        @livewire('solicitud.persona-datos', ['persona' => $persona], key($persona->id))

        @livewire('solicitud.persona-referente', ['persona' => $persona], key($persona->id))

        @livewire('solicitud.persona-solicitud', ['persona' => $persona], key($persona->id))

    </div>
@endsection


@section('js')

    <script src="{{asset('plugins/input-mask/jquery.inputmask.bundle.min.js')}}"></script>
    {{-- <script src="{{asset('plugins/input-mask/input-mask.js')}}"></script> --}}
    <script src="{{asset('plugins/select2/select2.min.js')}}"></script>
    <script src="{{asset('js/solicitud/create.js')}}"></script>
    <script src="{{asset('plugins/bootstrap-maxlength/bootstrap-maxlength.js')}}"></script>
    <script src="{{asset('plugins/bootstrap-maxlength/custom-bs-maxlength.js')}}"></script>


@endsection
