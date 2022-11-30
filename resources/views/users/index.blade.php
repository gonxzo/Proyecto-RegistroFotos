@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    USUARIOS
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="usuario" class="table table-bordered table-sm" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">Usuario</th>
                                    <th scope="col">Correo Electronico</th>
                                    <th scope="col">Mostrar</th>
                                    <th scope="col">Editar</th>
                                    <th scope="col">Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $item)
                                <tr>
                                    <td >{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td width = 10px>
                                        @can('users.show')
                                        <button  type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal{{$item->id}}">
                                            Visualizar
                                        </button>
                                        <div class="modal fade" id="modal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">DESCRIPCION DEL USUARIO</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p><strong>Nombre:</strong> {{$item->name}}</p>
                                                        <p><strong>Correo Electronico: </strong> {{$item->email}}</p>
                                                        <p><strong>Direccion Domicilio: </strong> {{$item->direccion}}</p>
                                                        <p><strong>Telefono/Celular: </strong> {{$item->telefono}}</p>
                                                        <p><strong>Fecha de Nacimiento: </strong> {{$item->fechanacimiento}}</p>
                                                        
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endcan
                                    </td>
                                    <td width = 10px>
                                        @can('users.edit')
                                        <a href="{{route('users.edit',$item->id)}}" class="btn btn-sm btn-info">Editar</a>
                                        @endcan
                                    </td>
                                    <td width='15'>
                                        @can('users.destroy')
                                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                                        data-target="#modal2{{ $item->id }}">
                                        Eliminar
                                    </button>
                                    <div class="modal fade" id="modal2{{ $item->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalCenterTitle"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                </div>
                                                <div class="modal-body">
                                                    <img src="img/imgeliminar.jpg"
                                                        width="50"
                                                        height="50">
                                                    ¿Desea Eliminar el Usuario Seleccionado...?
                                                    <div class="modal-footer">
                                                        {!! Form::open(['route' => ['users.destroy', $item->id], 'method' => 'DELETE']) !!}
                                                        <button class="btn btn-sm btn-info">Eliminar</button>
                                                        {!! Form::close() !!}
                                                        <button type="button" class="btn btn-sm btn-info"
                                                            data-dismiss="modal">Cancelar</button>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
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

