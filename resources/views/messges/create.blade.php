<x-app-layout>
    <h1>Contactos</h1>

    <h2>Escribeme</h2>
    @if(session()->has('info'))
        <h3>{{ session('info') }}</h3>
    @else
        <form method="POST" action="{{ route('mensajes.store') }}">
            @csrf
            <p><label for="nombre">
                    Nombre
                    <input type="text" name="nombre" value="{{old('nombre')}}">
                    {!! $errors->first('nombre', '<span class=error>:message</span>') !!}
                </label></p>
            <p></p><label for="email">
                Email
                <input type="email" name="email" value="{{old('email')}}">
                {!! $errors->first('email', '<span class=error>:message</span>') !!}
            </label></p>
            <p></p><label for="mensaje">
                Mensaje
                <textarea name="mensaje" >{{old('mensaje')}}</textarea>
                {!! $errors->first('mensaje', '<span class=error>:message</span>') !!}
            </label></p>
            <input type="submit" value="enviar">

        </form>
    @endif
</x-app-layout>
