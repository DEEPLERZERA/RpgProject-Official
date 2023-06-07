<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./image/duvida.png" type="image/x-icon">
    <title>FICHA</title>
</head>
<body>
    <div class="container">
        <h1>Ficha RPG</h1>
        <div class="centralDiv">
            <div class="formHell">                
                 
                            
                <?php
                // Verifica se o formulário foi submetido
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Verifica se o valor A foi confirmado
                    if (isset($_POST["confirmar"]) && $_POST["confirmar"] == "A") {
                        echo ("header['location: produto-lista.php'];");
                    }
                }
                ?>

                <!-- Formulário com o botão de confirmação -->
                <form class = "hellPost" method="POST" action="php/criar.php">
                    <input type="hidden" name="confirmar" value="A">
                    <input class= "button" type="submit" value="Criar">
                </form>

                <form class = "hellPost" method="POST" action="php/editar.php">
                    <input type="hidden" name="confirmar" value="A">
                    <input class= "button2" type="submit" value="Editar">
                </form>

                <form class = "hellPost" method="POST" action="php/deletar.php">
                    <input type="hidden" name="confirmar" value="A">
                    <input class= "button3" type="submit" value="Deletar">
                </form>

                <form class = "hellPost" method="POST" action="php/visualizar.php">
                    <input type="hidden" name="confirmar" value="A">
                    <input class= "button4" type="submit" value="Visualizar">
                </form>
            </div>            
        </div>
    </div>
</body>
</html>