<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>
<body>
    
    <h1>Categorias</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/categorias" method="post">
        @csrf
        <label> Nome da Categoria
            <input type="text" name="nome" id="nome" placeholder="Docinhos" required>
        </label>
        <input type="submit" value="Inserir">
    </form>
    <ul>
        @foreach ($categorias as $categoria)
            <li>{{ $categoria->nome }}</li>
        @endforeach
    </ul>
</body>
</html>