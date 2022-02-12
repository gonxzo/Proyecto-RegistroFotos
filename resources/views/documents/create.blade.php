@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Carga de Imagenes
                </div>
                <div class="card-body">

                  <form class="" action="{{route('documents.store')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @include('documents.partials.form')
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
