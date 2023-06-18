<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRIAR FICHA</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../image/duvida.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <h1>Criar Ficha RPG</h1>
        <div class="centralDiv">
            <div class="formHell">  
                
                    
                    <?php 
                        include_once("./conexao.php");
                        
                        $vida = $_POST['txtN1'];
                        $classe = $_POST['txtN2'];
                        $tipogeo = $_POST['txtN3'];
                        $consti = $_POST['txtN4'];
                        $forca = $_POST['txtN5'];
                        $resist = $_POST['txtN6'];
                        $intel = $_POST['txtN7'];
                        $saber = $_POST['txtN8'];
                        $arm = $_POST['txtN9'];

                        if(isset($_POST['criar'])){
                            $adicionar = "INSERT INTO personagem (vida_personagem, classe_per, geo_personagem, consti_personagem, forca_personagem, resist_personagem, intel_personagem, sabedoria_personagem, cat_armadura) 
                            VALUES ($vida, '$classe', '$tipogeo', '$consti', $forca, $resist, $intel, $saber, '$arm')";
                            $adicionarQ = mysqli_query($conn, $adicionar);
                        }
                        
                        $id = "SELECT MAX(id_personagem) FROM personagem";//
                        $idQ = mysqli_query($conn, $id);
                        $row = mysqli_fetch_assoc($idQ);

                        foreach($row as $i){
                            echo "<h1 class = 'textocara'> Registro criado! | Seu ID é: <b>$i</b> | Guarde este número!</h1>";
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