<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-4 mb-4">Pesquisar</h1>
        <form class="mb-4" id="pesq_prod" method="post">
            <div class="col-12 mb-3">
                <input type="text" name="produto" class="form-control" placeholder="Digite a palavra...">
                <span id="result_pesq"></span>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-success">Pesquisar</button>
            </div>
        </form>
        <span id="listar_prod"></span>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integridade="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anônimo"></script>
    <script src="script.js"></script>
</body>
</html>