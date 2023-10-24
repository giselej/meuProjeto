

{{-- @foreach ($meusUsuarios as $usuario)
<p>{{$usuario->nome}}</p>

@endforeach --}}
<table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>nome</th>
            <th>email</th>
            <th>editar</th>
            <th>deletar</th>
        </tr>
    </thead>

<tbody>
    @forelse ($meusUsuarios as $usuario)
    <tr>
        <td>{{$usuario->id}}</td>
        <td>{{$usuario->nome}}</td>
        <td>{{$usuario->email}}</td>
        <td> <a href="{{route ('usuario.editar', $usuario->id) }}">
            editar usuario</a>
        </td>
        <td></td>
    </tr>

    @empty
    <p>nenhum usuario cadastrado</p>

    @endforelse
</tbody>
</table>
