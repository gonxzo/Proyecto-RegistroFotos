@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        Trabajadores
                    </div>
                    <div class="card-body">
                        @can('workers.create')
                            <a href="{{ route('workers.create') }}" class="btn btn-sm btn-primary mb-1">Crear Nuevo
                                Registro</a>
                            <br>
                        @endcan
                        <div class="table-responsive">
                            <table id="usuario" class="table table-bordered table-sm" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">Trabajadores</th>
                                        <th scope="col">cargo</th>
                                        <th scope="col">Proyecto</th>
                                        @can('workers.show')
                                            <th scope="col">Mostrar</th>
                                        @endcan
                                        @can('workers.edit')
                                            <th scope="col">Editar</th>
                                        @endcan
                                        @can('workers.destroy')
                                            <th scope="col">Eliminar</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($workers as $item)
                                        <tr>
                                            @foreach ($users as $usuario)
                                                @if ($item->iduser == $usuario->id)
                                                    <td>{{ $usuario->name }}</td>
                                                @endif
                                            @endforeach
                                            <td>{{ $item->position }} </td>
                                            @foreach ($projects as $project)
                                                @if ($item->idproject == $project->id)
                                                    <td>{{ $project->name }}</td>
                                                @endif
                                            @endforeach
                                            <td width=10px>
                                                @can('workers.show')
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
                                                                        DESCRIPCION DEL TRABAJADOR</h5>
                                                                </div>
                                                                <div class="modal-body">
                                                                    @foreach ($users as $usuario)
                                                                        @if ($item->iduser == $usuario->id)
                                                                            <p><strong>Nombre del
                                                                                    Trabajador:</strong>{{ $usuario->name }}
                                                                            <p><strong>Correo Electronico:</strong>
                                                                                {{ $usuario->email }}
                                                                            <p><strong>Direccion Domicilio:</strong>
                                                                                {{ $usuario->direccion }}
                                                                            <p><strong>Telefono/Celular:</strong>
                                                                                {{ $usuario->telefono }}
                                                                        @endif
                                                                    @endforeach
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
                                                @can('workers.edit')
                                                    <a href="{{ route('workers.edit', $item->id) }}"
                                                        class="btn btn-sm btn-info">Editar</a>
                                                @endcan
                                            </td>
                                            <td width=10px>
                                                @can('workers.destroy')
                                                    {!! Form::open(['route' => ['workers.destroy', $item->id], 'onclick' => "return confirm('Esta Seguro de Eliminar este Registro')", 'method' => 'DELETE']) !!}
                                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                                    {!! Form::close() !!}
                                                @endcan
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
