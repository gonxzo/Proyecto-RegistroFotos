@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Poryectos
                </div>
                <div class="card-body">

                    {!! Form::model($project, ['route'=>['projects.update',$project->id],'method'=>'PUT' ]) !!}
                    @include('projects.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
