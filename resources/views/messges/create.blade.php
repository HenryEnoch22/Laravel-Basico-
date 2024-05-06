<x-app-layout>
    <h1 class="text-3xl ml-5 mb-2.5">Contactos</h1>

    <h2 class="text-2xl ml-5 mb-2.5">Escribeme</h2>
    <div class="form-container flex justify-evenly" >
        @if(session()->has('info'))
            <h3>{{ session('info') }}</h3>
        @else
            <form method="POST" action="{{ route('mensajes.store') }}">
                @csrf
                <p><label for="nombre">
                        Nombre
                        <input type="text" name="nombre" value="{{old('nombre')}}" class="block border-none rounded-md bg-gray-300 p-2 mb-2.5 w-64" placeholder="Tilin Daniel de Oro">
                        {!! $errors->first('nombre', '<span class=error>:message</span>') !!}
                    </label></p>
                <p></p><label for="email">
                    Email
                    <input type="email" name="email" value="{{old('email')}}" class="block border-none rounded-md bg-gray-300 p-2 mb-2.5 w-64" placeholder="example02@magdielito.com">
                    {!! $errors->first('email', '<span class=error>:message</span>') !!}
                </label></p>
                <p></p><label for="mensaje" class="mb-2.5">
                    Mensaje
                    <textarea name="mensaje" class="block border-none rounded-md bg-gray-300 p-2 mb-2.5 w-64" placeholder="Hola causitas" >{{old('mensaje')}}</textarea>
                    {!! $errors->first('mensaje', '<span class=error>:message</span>') !!}
                </label></p>
                <input type="submit" value="enviar" class="w-20 h-8 bg-blue-500 rounded-2xl text-gray-200">

            </form>
        @endif

        <img src="{{ asset('img/tumamaw.jpg') }}" alt="Tu mamá w" srcset="" class="">
    </div>

</x-app-layout>
