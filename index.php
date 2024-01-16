<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="stylo.css">
    <title>HOME</title>
</head>
<body>
    <form action="busca.php" method="get" class="p-3">
        <div class="my-3">

            <h1>Cliente</h1>

            <select class="form-control" name="cliente_buscar" id="cliente_buscar">

             <!-- mostar os clientes como option  -->.
                <option>Selecione o cliente!</option>
                <option>teste 1</option>
                <option>Teste 2 </option>
            </select>
        </div>

        <div>
                <div class="my-3 col" >
                    <input onclick="buscar_cliente()" id="Buscar" class="btn btn-primary" type="submit"value="Buscar" style="width: 250px;">
                </div>

                <div class="my-3 col">
                    <a href="cadastro.php"><input type="button" class="btn btn-primary" value="Cadastrar nova informação" style="width: 250px;"></a>
                </div>

        </div>

    </form>
</body>
</html>
