@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white" >
                    DOCMUENTOS ADJUNTOS PARA LOS CANDIDATOS
                </div>
                <div class="card-body">
                    @can('documentos.create')
                    <a href="{{route('documentos.create')}}" class="btn btn-sm btn-primary">INSERTAR UN NUEVO DOCUMENTO</a>
                    @endcan
                    <br><br>
                    <table class="table table-bordered table-sm" >
                        <thead>
                            <tr class="grid">
                                <th scope="col">DESCRIPCION DEL DOCUMENTO</th>
                               {{--  <th scope="col">DOCUMENTO</th> --}}
                                <th scope="col" colspan="3"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($documentos as $item)
                            <tr>
                                <td>{{$item->DocumentoDescripcion}}</td>
                                <td width = 10px>
                                    @can('documentos.show')
                                    <a href="{{route('documentos.show',$item->IdDocumento)}}" class="btn btn-sm btn-success">Mostrar</a>
                                    @endcan
                                </td>
                                <td width = 10px>
                                    @can('autoridads.edit')
                                    <a href="{{route('documentos.edit',$item->IdDocumento)}}" class="btn btn-sm btn-info">Editar</a>
                                    @endcan
                                </td>
                                <td width = 10px>
                                    @can('documentos.destroy')
                                    {!!Form::open(['route'=>['documentos.destroy',$item->IdDocumento],'method'=> 'DELETE', 'id'=> 'formeliminar'])!!}
                                    <button class="btn btn-sm btn-danger" id="eliminar">Eliminar</button>
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                    {{$documentos->render()}}
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
