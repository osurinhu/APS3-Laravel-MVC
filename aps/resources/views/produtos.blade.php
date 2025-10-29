<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    
    <h1>Produtos</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/produtos" method="post">
        @csrf
        </label> Nome do produto:
            <input type="text" name="nome" id="nome" placeholder="Bombom" required>
        <label>
        </label> Categoria:
            <select name="categoria" id="categoria" required>
                @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                @endforeach
        <label>
        </select>

        <input type="submit" value="Inserir">
    </form>
    <h2></h2>
    <ul>
        @foreach ($produtos as $produto)
            <li>{{ $produto->nome }} - {{ $produto->categoria->nome }}</li>
        @endforeach
    </ul>
</body>
</html>