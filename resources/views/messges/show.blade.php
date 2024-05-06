<x-app-layout>
    <h1 class="text-3xl">Mensaje</h1>
    <p class="mt-3.5">Enviado por {{ $mensaje->nombre }} - {{ $mensaje->email }}</p>
    <p class="mt-3.5">{{ $mensaje->mensaje }}</p>


</x-app-layout>


