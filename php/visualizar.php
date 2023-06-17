<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VISUALIZAR FICHA</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../image/duvida.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <h1>Visualizar Ficha RPG</h1>
        <div class="centralDiv">
            <div class="formHell">    
            <form class ="formHellPost" action="../php/personagemVisualizar.php" method="get"> 
            <?php 
                        for ($i=1;$i<2;$i++){  
                            switch ($i){
                                case '1':
                                    echo("<label class = 'text1' for='txtN$i'>Digite ID</label>");                                    
                                     break;
                            }                                                      
                            echo("<input class = 'textForm2' type='text' name='txtN$i'>");                           
                        }                        
                    ?>
                    <input class = "btnForm" type="submit" value="Visualizar">
                    </form>
                    <form class ="formHellPost2" action="../index.php" method="post"> 
                    <input class = "btnForm2" type="submit" value="Voltar">
                </form>
            </div>            
        </div>
    </div>
</body>
</html>