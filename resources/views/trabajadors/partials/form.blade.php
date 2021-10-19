<div class="form-group">
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong> {!! Form::label('nombre', 'Nombres') !!}</strong>
            {!! Form::text('nombre', null, ['class' => 'form-control', 'onKeyUp' => 'this.value=this.value.toUpperCase();']) !!}
        </div>
        <div class="form-group col-md-6">
            <strong> {!! Form::label('apellidos', 'Apellidos') !!}</strong>
            {!! Form::text('apellidos', null, ['class' => 'form-control', 'onKeyUp' => 'this.value=this.value.toUpperCase();']) !!}
        </div>
        <div class="form-group col-md-2">
            <strong> {!! Form::label('edad', 'Edad') !!}</strong>
            {!! Form::text('edad', null, ['class' => 'form-control', 'onKeyUp' => 'this.value=this.value.toUpperCase();']) !!}
        </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-12">
        <strong>{!! Form::label('direccion', 'Dirección') !!}</strong>
          {!! Form::text('direccion', null, ['class' => 'form-control', 'onKeyUp' => 'this.value=this.value.toUpperCase();']) !!}
      </div>
      
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <strong> {!! Form::label('cargo', 'Cargo en la Empresa') !!}</strong>
        {!! Form::text('cargo', null, ['class' => 'form-control', 'onKeyUp' => 'this.value=this.value.toUpperCase();']) !!}
    </div>
    
</div>
<div class="form-row">
  <div class="form-group col-md-12">
    <strong> {!! Form::label('proyectoid', 'Proyecto a Cargo') !!}</strong>
    <select class="form-control" name="proyectoid" id="proyectoid">
        @foreach ($proyecto as $proy)
            <option value="{{ $proy['id'] }}">{{ $proy['nombre'] }}</option>
        @endforeach
    </select>
  </div>
  
</div>
   <br>
    <div class="form-group">
        {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) !!}
    </div>
</div>
