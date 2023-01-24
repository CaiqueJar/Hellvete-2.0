<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">nome do produto</th>
      <th scope="col">valor do produto</th>
      <th scope="col">Categoria</th>
    </tr>
  </thead>
  <tbody>
    @foreach($produtos as $produto)
        <tr>
            <th scope="row">{{ $produto->nomeProduto }}</th>
            <td>{{ $produto->valorProduto }}</td>
            <td>{{ $categorias->where('idCategoria', $produto->idCategoria)->first()->categoria }}</td>

        </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>