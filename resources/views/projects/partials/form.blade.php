<div class="form-group">
    {!! Form::label('name','Nombre del proyecto') !!}
    {!! Form::text('name', null, ['class'=> 'form-control']) !!}
    {!! Form::label('location','Direccion del Proyecto') !!}
    {!! Form::text('location', null, ['class'=> 'form-control']) !!}
    {!! Form::label('latlon','Ubicacion') !!}
    
    <input type="text" name="latlon" class="form-control" id="textmap" value="geolocation">
  
  <div class="form-group">
  {!! Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary']) !!}
  </div>
