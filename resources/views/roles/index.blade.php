@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Roles
                </div>
                <div class="card-body">
                    @can('roles.create')
                    <a href="{{route('roles.create')}}" class="btn btn-sm btn-primary">Crear Un Nuevo Rol</a>
                    @endcan
                    <br>
                    <div class="table-responsive">
                        <table id="usuario" class="table table-bordered table-sm" style="width:100%">
                            <thead>
                                <tr class="grid">
                                    <!--th scope="col">#</th-->
                                    <th scope="col">Rol</th>
                                    <th scope="col">Abreviatura</th>
                                    <th scope="col">Descripción</th>
                                    @can('roles.show')
                                    <th scope="col">Mostrar</th>
                                    @endcan
                                    @can('roles.edit')
                                        <th scope="col">Editar</th>
                                    @endcan
                                    @can('roles.destroy')
                                        <th scope="col">Eliminar</th>
                                    @endcan
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $item)
                                <tr>
                                    <!--th scope="row">{{$loop->iteration}}</th-->
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->slug}}</td>
                                    <td>{{$item->description}}</td>
                                    <td width = 10px>
                                        @can('roles.show')
                                        <button  type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal{{$item->id}}">
                                            Mostrar
                                        </button>
                                        <div class="modal fade" id="modal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">DESCRIPCION DEL ROLE</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p><strong>Nombre del Role:</strong> {{$item->name}}</p>
                                                        <p><strong>Abreviatura: </strong> {{$item->slug}}</p>
                                                        <p><strong>Descripción: </strong> {{$item->description}}</p>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endcan
                                    </td>
                                    <td width = 10px>
                                        @can('roles.edit')
                                        <a href="{{route('roles.edit',$item->id)}}" class="btn btn-sm btn-info">Editar</a>
                                        @endcan
                                    </td>
                                    <td width='15'>
                                        @can('roles.destroy')
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
                                                    ¿Desea Eliminar el Rol Seleccionado...?
                                                    <div class="modal-footer">
                                                        {!! Form::open(['route' => ['roles.destroy', $item->id], 'method' => 'DELETE']) !!}
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
                            </tbody>
                        </table>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
