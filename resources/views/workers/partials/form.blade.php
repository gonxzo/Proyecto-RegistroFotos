<div class="form-group">
    <div class="form-row">
        <div class="form-group col-md-12">
            <strong> {!! Form::label('iduser', 'Nombre del Trabajador') !!}</strong>
            <select class="form-control" name="iduser" id="iduser">
                @foreach ($user as $users)
                    <option value="{{ $users['id'] }}">{{ $users['name'] }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <strong> {!! Form::label('idproject', 'Proyecto a Cargo') !!}</strong>
            <select class="form-control" name="idproject" id="idproject">
                @foreach ($project as $proy)
                    <option value="{{ $proy['id'] }}">{{ $proy['name'] }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <strong> {!! Form::label('position', 'Cargo en la Empresa') !!}</strong>
            <select class="form-control" name="position" id="position">
                <option>OBRERO</option>
                <option>GERENTE</option>
                <option>SUPERVISOR DE OBRA</option>
                <option>JEFE DE AREA</option>
            </select>
        </div>

    </div>
    <br>
    <div class="form-group">
        {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) !!}
        <a href="{{ route('workers.index') }}" class="btn btn-sm btn-primary">Volver</a>
    </div>
</div>
