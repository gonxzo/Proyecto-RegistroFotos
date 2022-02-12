@extends('layouts.app')

@section('content')


    <div class="col-md-3 mx-auto p-0">
        <div class="card">
            <div class="login-box">
                <div class="login-snip">
                    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1"
                        class="tab">INGRESO</label>
                    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2"
                        class="tab">REGISTRO</label>
                    <div class="login-space">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="login">
                                <br><br>
                                <div class="group"> <label for="user" class="label">Usuario</label>
                                    <input id="email" type="email" class="input" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                </div>
                                <div class="group"> <label for="pass" class="label">Contraseña</label>
                                    <input id="password" type="password" class="input" name="password" required
                                        autocomplete="current-password">
                                </div>
                                <div class="group"> <input id="check" type="checkbox" class="check"
                                        checked>
                                    <br><br>
                                    <label for="check"><span class="icon"></span> Recordar mi cuenta...</label>
                                </div>
                                <div class="group"> <input type="submit" class="button" value="INGRESAR">
                                </div>
                                <div class="col-md-12">
                                    <ul class="social-network social-circle">
                                        <li><a href="#" class="icoFacebook" title="Facebook"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" class="icoTwitter" title="Twitter"><i
                                                    class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" class="icoGoogle" title="Google +"><i
                                                    class="fab fa-google-plus"></i></a></li>
                                         
                                    </ul>
                                </div>

                        </form>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="sign-up-form">
                            <div class="group">
                                <input id="name" type="text" class="input @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus
                                    placeholder="Nombre Completo">
                                <input id="email" type="email" class="input @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="Correo Electronico">
                                <input id="direccion" type="direccion"
                                    class="input @error('direccion') is-invalid @enderror" name="direccion"
                                    value="{{ old('direccion') }}" required autocomplete="direccion"
                                    placeholder="Direccion">
                                <input id="fechanacimiento" type="fechanacimiento"
                                    class="input @error('fechanacimiento') is-invalid @enderror" name="fechanacimiento"
                                    value="{{ old('fechanacimiento') }}" required autocomplete="fechanacimiento"
                                    placeholder="Fecha de Nacimiento">
                                <input id="telefono" type="telefono" class="input @error('telefono') is-invalid @enderror"
                                    name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono"
                                    placeholder="Telefono/Celular">
                                <input id="password" type="password" class="input @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="new-password" placeholder="Contraseña">
                                <input id="password-confirm" type="password" class="input"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Confirme Contraseña">
                            </div>
                            
                            <div class="group"> <input type="submit" class="button" value="REGISTRARSE">
                            </div>

                            {{-- <div class="foot"> <label for="tab-1">Already Member?</label>
                                                    </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
