

{{-- @foreach ($meusUsuarios as $usuario)
<p>{{$usuario->nome}}</p>

@endforeach --}}

@forelse ($meusUsuarios as $usuario)
<p>{{$usuario->nome}}</p>

@empty
<p>nenhum usuario cadastrado</p>

@endforelse
