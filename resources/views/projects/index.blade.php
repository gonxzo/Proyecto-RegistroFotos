@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        PROYECTOS
                    </div>
                    <div class="card-body">
                        @can('projects.create')
                            <a href="{{ route('projects.create') }}" class="btn btn-sm btn-primary mb-1">Nuevo Proyecto</a>
                        @endcan
                        @can('documents.create')
                            <a href="{{ route('documents.create') }}" class="btn btn-sm btn-primary mb-1">Cargar Imagenes</a>
                        @endcan
                        <br>
                        <div class="table-responsive">
                            <table id="project" class="table table-bordered table-sm" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">Proyecto</th>
                                        <th scope="col">Tipo</th>
                                        <th scope="col">Localidad</th>
                                        @can('projects.show')
                                            <th scope="col">Mostrar</th>
                                        @endcan
                                        @can('projects.edit')
                                            <th scope="col">Editar</th>
                                        @endcan
                                        @can('projects.destroy')
                                            <th scope="col">Eliminar</th>
                                        @endcan
                                        @can('projects.pdf')
                                            <th scope="col">Reportes</th>
                                        @endcan

                                    </tr>
                                </thead>
                                <tbody>
                                    @if (Auth::user()->id == 45)
                                        @foreach ($projects as $item)
                                            <tr>
                                                <td>{{ $item->name }} </td>
                                                <td>{{ $item->typeproject }} </td>
                                                <td>{{ $item->location }} </td>
                                                @can('projects.show')
                                                    <td width=10px>
                                                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal"
                                                            data-target="#modal{{ $item->id }}">
                                                            Mostrar
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
                                                                            {{ $item->name }}
                                                                        </p>
                                                                        <p><strong>Tipo de Proyecto: </strong>
                                                                            {{ $item->typeproject }}</p>
                                                                        <p><strong>Fecha de Inicio de la Obra: </strong>
                                                                            {{ $item->dateb }}</p>
                                                                        <p><strong>Fecha Fin de la Obra: </strong>
                                                                                {{ $item->datef }}</p>
                                                                        <p><strong>Fecha de Entraga de la Obra: </strong>
                                                                                {{ $item->dateentry }}</p>
                                                                        <p><strong>Superficie UTIL: </strong>
                                                                                    {{ $item->surface }}</p>
                                                                        <p><strong>Descripcion: </strong>
                                                                                    {{ $item->description }}</p>
                                                                        <p><strong>Localidad: </strong>
                                                                            {{ $item->location }}</p>
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
                                                    </td>
                                                @endcan
                                                @can('projects.edit')
                                                    <td width=10px>
                                                        <a href="{{ route('projects.edit', $item->id) }}"
                                                            class="btn btn-sm btn-info">Editar</a>
                                                    </td>
                                                @endcan
                                                @can('projects.destroy')
                                                    <td width=10px>
                                                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                                                        data-target="#modal2{{ $item->id }}">
                                                        Eliminar
                                                    </button>
                                                    <div class="modal fade" id="modal2{{ $item->id }}" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalCenterTitle"
                                                        aria-hidden="true"  width="100%">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                </div>
                                                                <div class="modal-body">
                                                                    <img src="img/imgeliminar.jpg"
                                                                        width="50"
                                                                        height="50">
                                                                    ¿Desea Eliminar el Proyecto y todos sus Registros...?
                                                                    <div class="modal-footer">
                                                                        {!! Form::open(['route' => ['projects.destroy', $item->id], 'method' => 'DELETE']) !!}
                                                                        <button class="btn btn-sm btn-info">Eliminar</button>
                                                                        {!! Form::close() !!}
                                                                        <button type="button" class="btn btn-sm btn-info"
                                                                            data-dismiss="modal">Cancelar</button>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </td>
                                                @endcan
                                                @can('projects.pdf')
                                                    <td width=10px>
                                                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal"
                                                            data-target="#modalpdf{{ $item->id }}">
                                                            Reportes
                                                        </button>
                                                        <div class="modal fade" id="modalpdf{{ $item->id }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-body">
                                                                        <embed src="{{ route('projects.pdf', $item->id) }}"
                                                                            type="application/pdf" width="100%"
                                                                            height="750px" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </td>
                                                @endcan
                                            </tr>
                                        @endforeach
                                    @else
                                        @foreach ($projects as $item)
                                            @foreach ($workers as $trabs)
                                                @if ($trabs->iduser == Auth::user()->id && $trabs->idproject == $item->id)
                                                    <tr>
                                                        <td>{{ $item->name }} </td>
                                                        <td>{{ $item->typeproject }} </td>
                                                        <td>{{ $item->location }} </td>
                                                        @can('projects.show')
                                                            <td width=10px>
                                                                <button type="button" class="btn btn-sm btn-success"
                                                                    data-toggle="modal"
                                                                    data-target="#modal{{ $item->id }}">
                                                                    Mostrar
                                                                </button>
                                                                <div class="modal fade" id="modal{{ $item->id }}"
                                                                    tabindex="-1" role="dialog"
                                                                    aria-labelledby="exampleModalCenterTitle"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered"
                                                                        role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLongTitle">
                                                                                    DESCRIPCION DEL PROYECTO</h5>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p><strong>Nombre del Proyecto:</strong>
                                                                                    {{ $item->name }}
                                                                                </p>
                                                                                <p><strong>Tipo de Proyecto: </strong>
                                                                                    {{ $item->typeproject }}</p>
                                                                                <p><strong>Fecha de Inicio de la Obra: </strong>
                                                                                    {{ $item->dateb }}</p>
                                                                                <p><strong>Fecha Fin de la Obra: </strong>
                                                                                        {{ $item->datef }}</p>
                                                                                <p><strong>Fecha de Entraga de la Obra: </strong>
                                                                                        {{ $item->dateentry }}</p>
                                                                                <p><strong>Superficie UTIL: </strong>
                                                                                            {{ $item->surface }}</p>
                                                                                <p><strong>Descripcion: </strong>
                                                                                            {{ $item->description }}</p>
                                                                                <p><strong>Localidad: </strong>
                                                                                            {{ $item->location }}</p>
                                                                                <p><strong>Ubicacion del Proyecto: </strong>
                                                                                            {{ $item->latlon }}</p>
                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                        class="btn btn-secondary"
                                                                                        data-dismiss="modal">Cerrar</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        @endcan
                                                        @can('projects.edit')
                                                            <td width=10px>
                                                                <a href="{{ route('projects.edit', $item->id) }}"
                                                                    class="btn btn-sm btn-info">Editar</a>
                                                            </td>
                                                        @endcan
                                                        @can('projects.destroy')
                                                            <td width=10px>
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
                                                                            ¿Desea Eliminar el Proyecto y todos sus Registros...?
                                                                            <div class="modal-footer">
                                                                                {!! Form::open(['route' => ['projects.destroy', $item->id], 'method' => 'DELETE']) !!}
                                                                                <button class="btn btn-sm btn-info">Eliminar</button>
                                                                                {!! Form::close() !!}
                                                                                <button type="button" class="btn btn-sm btn-info"
                                                                                    data-dismiss="modal">Cancelar</button>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                        @endcan
                                                        @can('projects.pdf')
                                                            <td width=10px>
                                                                <button type="button" class="btn btn-sm btn-success"
                                                                    data-toggle="modal"
                                                                    data-target="#modalpdf{{ $item->id }}">
                                                                    Reportes
                                                                </button>
                                                                <div class="modal fade" id="modalpdf{{ $item->id }}"
                                                                    tabindex="-1" role="dialog"
                                                                    aria-labelledby="exampleModalCenterTitle"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body">
                                                                                <embed
                                                                                    src="{{ route('projects.pdf', $item->id) }}"
                                                                                    type="application/pdf" width="100%"
                                                                                    height="750px" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                            </td>
                                                        @endcan
                                                    </tr>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    @endif

                                </tbody>
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
            </div>
        </div>
    </div>
@endsection
