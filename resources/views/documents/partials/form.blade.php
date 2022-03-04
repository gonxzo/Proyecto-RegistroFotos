<div class="form-group">
    {!! Form::label('document','CARGAR IMAGENES') !!}
    <input type="file" name="document[]" class="form-control" id="images" multiple="multiple">
</div>

<div class="form-group">
  {!! Form::label('idproject','NOMBRE DEL PROYECTO ') !!}
  <select  class="form-control" name="idproject" id="idproject">
   @foreach ($worker as $work)
       @if ($work->iduser ==  Auth::user()->id)
            @foreach ($project as $proy)
                @if ($proy->id == $work->idproject)
                    <option value="{{ $proy['id'] }}">{{ $proy['name'] }}
                    </option>
                @endif
            @endforeach
       @endif 
   @endforeach
   @if (Auth::user()->id == 45)
        @foreach ($project as $proy)
            <option value="{{ $proy['id'] }}">{{ $proy['name'] }}
            </option>
        @endforeach
    @endif
  
</select>
</div>
<div class="form-group">
    {!! Form::label('descripcion','ESTADO DE LA OBRA') !!}
    {!! Form::textArea('descripcion', null, ['class'=> 'form-control']) !!}
</div>


<div class="form-group">
{!! Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary']) !!}
<a href="{{ route('projects.index') }}" class="btn btn-sm btn-primary">Volver</a>
</div>
