<div class="form-group">
    {!! Form::label('nombre','Nombre del proyecto') !!}
    {!! Form::text('nombre', null, ['class'=> 'form-control']) !!}
    {!! Form::label('localidad','Localidad') !!}
    {!! Form::text('localidad', null, ['class'=> 'form-control']) !!}
    {!! Form::label('latlon','Ubicacion') !!}
    
    <input type="text" name="latlon" class="form-control" id="textmap" value="geolocation">
  
  <div class="form-group">
  {!! Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary']) !!}
  </div>
