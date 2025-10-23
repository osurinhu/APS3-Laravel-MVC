<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>
<body>
    
    Categorias

    <form action="/categorias" method="post">
        @csrf
        <input type="text" name="nome" id="nome">
        <input type="submit" value="Inserir">
    </form>
    <ul>
        @foreach ($categorias as $categoria)
            <li>{{ $categoria->nome }}</li>
        @endforeach
    </ul>
</body>
</html>