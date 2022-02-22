<div class="form-row">
  <div class="form-group col-md-6">
      <strong> {!! Form::label('name','Nombre del Proyecto') !!}</strong>
      <input type="text" class="form-control" onKeyUp="this.value=this.value.toUpperCase();" name="name" id="name" value="{{old('name')}}">
      @error('name')
         <small> <H6 style="color:red;">*Ingrese Nombre del Proyecto</H6> </small>
      @enderror
  </div>
  <div class="form-group col-md-6">
    <strong> {!! Form::label('typeproject','Tipo de Proyecto') !!}</strong>
    <select class="form-control" name="typeproject" id="typeproject">
      <option>CONSTRUCCIÓN NUEVA</option>
      <option>RENOVACIÓN</option>
    </select>
</div>
</div>
<div class="form-row">
  <div class="form-group col-md-4">
      <strong> {!! Form::label('dateb','Fecha de Inicio') !!}</strong>
      <input type="date" class="form-control" onKeyUp="this.value=this.value.toUpperCase();" name="dateb" id="dateb" value="{{old('dateb')}}">
      @error('dateb')
         <small> <H6 style="color:red;">*Introduzca Fecha de Inicio</H6> </small>
      @enderror
  </div>
  <div class="form-group col-md-4">
      <strong> {!! Form::label('datef','Fecha Final') !!}</strong>
      <input type="date" class="form-control" onKeyUp="this.value=this.value.toUpperCase();" name="datef" id="datef" value="{{old('datef')}}">
      @error('datef')
          <small> <H6 style="color:red;">*Introduzca Fecha Final</H6> </small>
      @enderror
  </div>
  <div class="form-group col-md-4">
    <strong> {!! Form::label('dateentry','Fecha de entrega') !!}</strong>
    <input type="date" class="form-control" onKeyUp="this.value=this.value.toUpperCase();" name="dateentry" id="dateentry" value="{{old('dateentry')}}">
    @error('dateentry')
        <small> <H6 style="color:red;">*Introduzca Fecha de Entrega</H6> </small>
    @enderror
</div>
</div>

<div class="form-row">
  <div class="form-group col-md-12">
      <strong> {!! Form::label('surface','Superficie Util') !!}</strong>
      <input type="text" rows="2" class="form-control" onKeyUp="this.value=this.value.toUpperCase();"  name="surface" id="surface" value="{{old('surface')}}">
   
      @error('surface')
         <small> <H6 style="color:red;">*Introduzca Superfici Util</H6> </small>
      @enderror
      
  </div>
</div>
<div class="form-row">
  <div class="form-group col-md-12">
      <strong> {!! Form::label('description','Descripcion de la Obra') !!}</strong>
      <textarea type="text" rows="2" class="form-control" onKeyUp="this.value=this.value.toUpperCase();" name="description" id="description" value="{{old('description')}}"></textarea>
      @error('description')
          <small> <H6 style="color:red;">*Introduzca Descripcion</H6> </small>
      @enderror
  </div>
</div>

<div class="form-row">
  <div class="form-group col-md-12">
      <strong> {!! Form::label('location','Direccion de la Obra') !!}</strong>
      <input type="text" rows="2"  class="form-control"  onKeyUp="this.value=this.value.toUpperCase();" name="location" id="location" value="{{old('location')}}">
      @error('location')
          <small> <H6 style="color:red;">*Introduzca Direccion</H6> </small>
      @enderror
     
  </div>
</div>

<div class="form-row">
  <div class="form-group col-md-12">
      <strong> {!! Form::label('latlon','Ubicacion Geofrafica') !!}</strong>
      <input type="text" class="form-control" onKeyUp="this.value=this.value.toUpperCase();" name="latlon" id="textmap" value="{{old('latlon')}}">
      @error('latlon')
          <small> <H6 style="color:red;">*Introduzca Ubcacion</H5> </small>
      @enderror
  </div>
</div>
  <div class="form-group">
  {!! Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary']) !!}
  </div>
