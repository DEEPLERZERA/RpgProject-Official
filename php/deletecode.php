<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETAR FICHA</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../image/duvida.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <h1>Deletar Ficha RPG</h1>
        <div class="centralDiv">
            <div class="formHell">  
                
                    <h1 class = "textocara">Registro deletado</h1>
                    <?php 
                    include_once("./conexao.php");
                        
                    $id = $_POST['txtN1'];
                    

                    if(isset($_POST['deletar'])){
                        $deletar = "DELETE FROM personagem WHERE id_personagem = $id";
                        $deletarQ = mysqli_query($conn, $deletar);
                    }                         
                    
                    ?>
                <form class ="formHellPost2" action="../index.php" method="post"> 
                    <input class = "btnForm2" type="submit" value="Voltar">
                </form>
            </div>            
        </div>
    </div>
</body>
</html>