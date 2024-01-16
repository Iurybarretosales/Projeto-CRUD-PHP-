<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="stylo.css">
    <title>Cadastro</title>
</head>
<body>

    <section>

        <form action="cad.php"  method="get" class="p-3" >

            <div class="my-3">
                <label class="form-label">cliente</label>
                <input class="form-control" type="text" name="cliente" id="cliente">
            </div>
    
            
            <div class="my-3 col">
                    <label class="form-label">Email</label>
                    <input class="form-control" type="email" name="email" id="email">
            </div>
    
            <div class="my-3 col">
                    <label class="form-label">Tell</label>
                    <input class="form-control" type="tel" name="tel" id="tel">
            </div>
    
    
            <div class="my-3">
                <label class="form-label">Observação</label>
                <textarea name="obs" class="form-control" cols="40" rows="7"></textarea>
            </div>
    
            <div class="my-3">
                <label class="form-label">Data para notificaçao</label>
                <input class="form-control" id="data" type="date" name="data">
            </div>
            
            <div class="my-3">
                <input class="btn btn-primary" type="submit" value="ENVIAR">
                <a href="index.php"><input type="button" class="btn btn-primary" value="Voltar"></a>
            </div>
    
        </form>
    </section>
    
</body>
</html>