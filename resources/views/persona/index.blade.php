@extends('layouts.admin')

@section('content')

    <div class="mt-4 seperator-header">
        <h4 class="fw-bold" style="font-weight: bold">Personas</h4>

        <a class="btn btn-primary mb-2 mr-2 btn-rounded ml-4" href="{{route('persona.create')}}"><i class="fa-solid fa-user-plus mr-2"></i> Nuevo</a>
    </div>

    <div class="row layout-spacing">
        <div class="col-lg-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">
                    <table id="style-3" class="table style-3  table-hover">
                        <thead>
                            <tr>
                                <th class="checkbox-column text-center"> N#</th>
                                <th class="text-right">Documento</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Email</th>
                                <th>Celular</th>
                                <th class="text-center">Estado</th>
                                <th class="text-center dt-no-sorting">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($personas as $item)
                                <tr>
                                    <td class="checkbox-column text-center"> {{$loop->iteration}} </td>
                                    <td class="text-right">{{number_format($item->documento, 0, ".", ".")}}</td>
                                    <td>{{$item->nombre}}</td>
                                    <td>{{$item->apellido}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->celular}}</td>
                                    <td class="text-center">
                                        <span class="shadow-none badge badge-success">Activo</span>
                                    </td>
                                    <td class="text-center">
                                        <ul class="table-controls">
                                            <li>
                                                <a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="Edit">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('js')

    <script>

        c3 = $('#style-3').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
            "<'table-responsive'tr>" +
            "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Mostrar pagina _PAGE_ de _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [5, 10, 20, 50],
            "pageLength": 5
        });

        multiCheck(c3);
    </script>
@endsection
