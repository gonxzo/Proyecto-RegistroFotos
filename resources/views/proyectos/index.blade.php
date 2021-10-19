@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        PROYECTOS
                    </div>
                    <div class="card-body">
                        @can('proyectos.create')
                            <a href="{{ route('proyectos.create') }}" class="btn btn-sm btn-primary mb-1">Nuevo Proyecto</a>

                        @endcan
                        @can('documentos.create')
                            <a href="{{ route('documentos.create') }}" class="btn btn-sm btn-primary mb-1">Cargar Imagenes</a>
                        @endcan

                        <br>
                        <div class="table-responsive">
                            <table id="usuario" class="table table-bordered table-sm" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">Proyecto</th>
                                        <th scope="col">Localidad</th>
                                        <th scope="col">Mostrar</th>
                                        <th scope="col">Editar</th>
                                        <th scope="col">Eliminar</th>
                                        <th scope="col">Imagenes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proyectos as $item)
                                        <tr>

                                            <td>{{ $item->nombre }} </td>
                                            <td>{{ $item->localidad }} </td>
                                            <td width=10px>
                                                @can('proyectos.show')
                                                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal"
                                                        data-target="#modal{{ $item->id }}">
                                                        Visualizar
                                                    </button>
                                                    <div class="modal fade" id="modal{{ $item->id }}" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalCenterTitle"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                                                        DESCRIPCION DEL PROYECTO</h5>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p><strong>Nombre del Proyecto:</strong>
                                                                        {{ $item->nombre }}
                                                                    </p>
                                                                    <p><strong>Localidad: </strong> {{ $item->localidad }}</p>
                                                                    <p><strong>Ubicacion del Proyecto: </strong>
                                                                        {{ $item->latlon }}</p>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Cerrar</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endcan
                                            </td>
                                            <td width=10px>
                                                @can('proyectos.edit')
                                                    <a href="{{ route('proyectos.edit', $item->id) }}"
                                                        class="btn btn-sm btn-info">Editar</a>
                                                @endcan
                                            </td>
                                            <td width=10px>
                                                @can('proyectos.destroy')
                                                    {!! Form::open(['route' => ['proyectos.destroy', $item->id], 'onclick' => "return confirm('Esta Seguro de Eliminar este Registro')", 'method' => 'DELETE']) !!}
                                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                                    {!! Form::close() !!}
                                                @endcan
                                            </td>
                                            <td width=10px>
                                                <button type="button" class="btn btn-sm btn-success" data-toggle="modal"
                                                    data-target="#modals{{ $item->id }}">
                                                    Visualizar
                                                </button>
                                                <div class="modal fade" id="modals{{ $item->id }}" tabindex="-1"
                                                    role="dialog" aria-labelledby="exampleModalCenterTitle"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document"
                                                        style="width: 100%;heigth:50%;">
                                                        <div class="modal-content">
                                                            <div class="card-header">

                                                            </div>

                                                            <div class="modal-body" id="imagen">
                                                                @foreach ($documento as $docu)
                                                                    @if ($item->id == $docu->DocumentoDescripcion)
                                                                        <img
                                                                            src="{{ asset('/uploads/' . $docu->Documento) }}">
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Cerrar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card-header">
                </div>
                <div class="card">
                    <div id="map" style="width:100%;height:550px">
                    </div>
                </div>



            @endsection
