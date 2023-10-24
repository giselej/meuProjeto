<html>
    <body>
        <form action="{{route('usuario.atualizar',$usuario->id)}}"method="post">
            @csrf
             @method('PUT')
             
            <label>nome:</label><br>
            <input type="text" name="nome" value="{{$usuario->nome}}"><br>


            <label>email:</label><br>
            <input type="text" name="email" value="{{$usuario->email}}"><br>

            <label>senha:</label><br>
            <input type="password" name="senha" value="{{$usuario->senha}}"><br>

            <input type="submit" value="atualizar">

        </form>
    </body>
</html>
