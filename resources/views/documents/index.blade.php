@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-white" >
                    IMAGENES A MODIFICAR O ELIMINAR
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="usuario" class="table table-bordered table-sm" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">Proyecto</th>
                                    <th scope="col">Fecha y Hora </th>
                                    @can('documents.show')
                                        <th scope="col">Ver Imagen</th>
                                    @endcan
                                    @can('documents.destroy')
                                        <th scope="col">Eliminar</th>
                                    @endcan
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($documents as $item)
                                    <tr>
                                        @foreach ($projects as $proy)
                                            @if ($item->idproject == $proy->id)
                                                <td>{{ $proy->name }}</td>
                                            @endif
                                        @endforeach
                                        <td>{{ $item->created_at }} </td>
                                            <td width=10px>
                                            @can('documents.show')
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
                                                                    Imagen del REgistro</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <img
                                                                            src="{{ asset('/uploads/' . $item->document) }}">
                                                               <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Cerrar</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endcan
                                        </td>
                                        <td width=10px>
                                            @can('documents.destroy')
                                                {!! Form::open(['route' => ['documents.destroy', $item->id], 'onclick' => "return confirm('Esta Seguro de Eliminar este Registro')", 'method' => 'DELETE']) !!}
                                                <button class="btn btn-sm btn-danger">Eliminar</button>
                                                {!! Form::close() !!}
                                            @endcan
                                        </td>

                                    </tr>
                                @endforeach
                                </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
