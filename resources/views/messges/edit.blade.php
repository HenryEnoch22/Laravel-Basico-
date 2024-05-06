<x-app-layout>
    <h1 class="text-3xl">Editar mensaje de {{$message->nombre}}</h1>

    <form method="POST" action="{{ route('mensajes.update', $message->id) }}">
        {!! method_field('PUT') !!}
        {!! csrf_field() !!}
        <p><label for="nombre">
                Nombre
                <input type="text" disabled name="nombre" value="{{ $message->nombre }}" class="block border-none rounded-md bg-gray-300 p-2 mb-2.5 w-64 opacity-45">
                {!! $errors->first('nombre', '<span class=error>:message</span>') !!} {{old('nombre')}}
            </label></p>
        <p></p><label for="email">
            Email
            <input type="text" disabled name="email" value="{{ $message->email }}" class="block border-none rounded-md bg-gray-300 p-2 mb-2.5 w-64 opacity-45">
            {!! $errors->first('email', '<span class=error>:message</span>') !!}
        </label></p>
        <p></p><label for="mensaje">
            Mensaje
            <textarea name="mensaje" class="block border-none rounded-md bg-gray-300 p-2 mb-2.5 w-64" >{{$message->mensaje}}</textarea>
            {!! $errors->first('mensaje', '<span class=error>:message</span>') !!}
        </label></p>
        <input type="submit" value="enviar" class="w-20 h-8 bg-blue-500 rounded-2xl text-gray-200">

    </form>
</x-app-layout>
