

{{-- @foreach ($meusUsuarios as $usuario)
<p>{{$usuario->nome}}</p>

@endforeach --}}
<table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>nome</th>
            <th>email</th>
            <th>rua</th>
            <th>propriedade</th>
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

        @forelse ( $usuario->enderecos as $endereco )
        <td>{{$endereco->rua}}</td>
        @if($endereco->propriedade)
        <td>{{$endereco->propriedade->nome}}</td>

        @else
        <td>--</td>
        @endif

        @empty

        <td>--</td>
        <td>--</td>

        @endforelse

        <td> <a href="{{route ('usuario.editar', $usuario->id) }}">
            editar usuario</a>
        </td>
        <td>
            <form action="{{route('usuario.deletar',$usuario->id)}}"method="post">
                @csrf
                @method('delete')
                <button type="submit"onclick="return confirm('tem certeza que deletar ?');">deletar</button>
            </form>

        </td>
    </tr>

    @empty
    <p>nenhum usuario cadastrado</p>

    @endforelse
</tbody>
</table>
