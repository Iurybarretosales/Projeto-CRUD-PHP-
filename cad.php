<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylo.css">
    <title>Resultado</title>
</head>
<body>
    <h1>Cadastro concluido com sucesso!</h1>


    <section>


        <form id="apresentacao_cliente" class="p-3" >
    
            <div id="cliente" class="my-3">
                <label id="obj_apresentaçao" class="form-label">cliente:</label>
    
                <?php 
                    $cliente = $_GET["cliente"];
                    echo " <label>$cliente</label>";
                
                ?>
            </div>
    
            <div id="email" class="my-3">
                <label id="obj_apresentaçao" class="form-label">Email:</label>
                <?php 
                    $email = $_GET["email"];
                    echo " <label>$email</label>";
                
                ?>
            </div>
    
            <div id="obs" class="my-3">
                <label id="obj_apresentaçao" class="form-label">Observação:</label>
                <?php 
                    $obs = $_GET["obs"];
                    echo " <label>$obs</label>";
                ?>
            </div>
    
            <div id="obs" class="my-3">
                <label id="obj_apresentaçao" class="form-label">Data Para Contato::</label>
                <?php 
                    $data = $_GET["data"];
                    echo " <label>$data</label>";
                ?>
            </div>

            
    
            
        </form>
    </section>
    
</body>
</html>