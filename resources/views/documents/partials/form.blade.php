<div class="form-group">
    {!! Form::label('document','CARGAR IMAGENES') !!}
    <input type="file" name="document[]" class="form-control" id="images" multiple="multiple">
</div>

<div class="form-group">
  {!! Form::label('idproject','NOMBRE DEL PROYECTO ') !!}
  <select  class="form-control" name="idproject" id="idproject">
   
    @foreach ($project as $proy)
        <option value="{{ $proy['id'] }}">{{ $proy['name'] }}
        </option>
    @endforeach
</select>
</div>
<div class="form-group">
    {!! Form::label('descripcion','ESTADO DE LA OBRA') !!}
    {!! Form::textArea('descripcion', null, ['class'=> 'form-control']) !!}
</div>


<div class="form-group">
{!! Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary']) !!}
</div>
