<html>
<head>
    <title> Novo Usuario</title>


</head>
<Body>
    <h1> Novo Usuario</h1>
    <form action="{{route('novo-usuario')}}"method="post">
        @csrf
        <label for="nome"></label>
        <input type="text"name="nome" id="nome"required>
        <br>
        <label for="email"></label>
        <input type="email"name="email" id="email"required>
        <br>
        <label for="senha"></label>
        <input type="password"name="senha" id="senha"required>
        <br>

        <input type="submit"valeu="cadastrar">
        <br>
    </form>
</body>

</html>
