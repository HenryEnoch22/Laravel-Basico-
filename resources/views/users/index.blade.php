<x-app-layout>
    <h1 class="text-3xl mb-4">Usuarios</h1>

    <div class="overflow-x-auto">
        <table class="w-full table-auto">
            <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left">ID</th>
                <th class="py-3 px-6 text-left">Nombre</th>
                <th class="py-3 px-6 text-left">Email</th>
                <th class="py-3 px-6 text-left">Rol</th>
                <th class="py-3 px-6 text-left">Acciones</th>
            </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
            @foreach($users as $user)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-left">{{$user->id}}</td>
                    <td class="py-3 px-6 text-left">{{$user->name}}</td>
                    <td class="py-3 px-6 text-left">{{$user->email}}</td>
                    <td class="py-3 px-6 text-left">{{$user->role}}</td>
                    <td class="py-3 px-6 text-left">
                        <a href="{{ route('usuarios.edit', $user->id) }}" class="text-blue-500 hover:text-blue-700 mr-2">Editar</a>
                        <form style="display: inline" method="POST" action="{{ route('usuarios.destroy', $user->id) }}">
                            {!! csrf_field() !!}
                            {!! method_field('DELETE') !!}

                            <button type="submit" class="text-red-500 hover:text-red-700">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
