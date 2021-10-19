<div class="form-group">
    {!! Form::label('Documento','documento digital') !!}
    <input type="file" name="Documento[]" class="form-control" id="images" multiple="multiple">
   {{--  {!! Form::file('Documento[]',array ('multiple'=>true), null, ['class'=> 'form-control']) !!} --}}
  </div>

<div class="form-group">
  {!! Form::label('DocumentoDescripcion','proyecto') !!}
  <select  class="form-control" name="DocumentoDescripcion" id="DocumentoDescripcion">
    @foreach ($proyecto as $proy)
        <option value="{{ $proy['id'] }}">{{ $proy['nombre'] }}
        </option>
    @endforeach
</select>
  
 
</div>


<div class="form-group">
{!! Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary']) !!}
</div>
