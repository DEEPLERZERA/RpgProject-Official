<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR FICHA</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../image/duvida.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <h1>Editar Ficha RPG</h1>
        <div class="centralDiv">
            <div class="formHell">  
                
                    <h1 class = "textocara">Registro atualizado</h1>
                    <?php 
                        include_once("conexao.php");

                        $id = $_POST['txtN1'];
                        $vida = $_POST['txtN2'];
                        $classe = $_POST['txtN3'];
                        $tipogeo = $_POST['txtN4'];
                        $consti = $_POST['txtN5'];
                        $forca = $_POST['txtN6'];
                        $resist = $_POST['txtN7'];
                        $intel = $_POST['txtN8'];
                        $saber = $_POST['txtN9'];
                        $arm = $_POST['txtN10'];
                        
                        if(isset($_POST['atualizar'])){
                            if($vida!=NULL){
                                $atVida = "UPDATE personagem SET vida_personagem = $vida WHERE id_personagem = $id";
                                $atVidaQ = mysqli_query($conn, $atVida);
                            } 
                            if($classe!=NULL){
                                $atClasse = "UPDATE personagem SET classe_per = '$classe' WHERE id_personagem = $id";
                                $atClasseQ = mysqli_query($conn, $atClasse);
                            } 
                            if($tipogeo!=NULL){
                                $atGeo = "UPDATE personagem SET geo_personagem = '$tipogeo' WHERE id_personagem = $id";
                                $atGeoQ = mysqli_query($conn, $atGeo);
                            } 
                            if($consti!=NULL){
                                $atConsti = "UPDATE personagem SET consti_personagem = '$consti' WHERE id_personagem = $id";
                                $atConstiQ = mysqli_query($conn, $atConsti);
                            } 
                            if($forca!=NULL){
                                $atForca = "UPDATE personagem SET forca_personagem = $forca WHERE id_personagem = $id";
                                $atForcaQ = mysqli_query($conn, $atForca);
                            } 
                            if($resist!=NULL){
                                $atResist = "UPDATE personagem SET resist_personagem = $resist WHERE id_personagem = $id";
                                $atResistQ = mysqli_query($conn, $atResist);
                            } 
                            if($intel!=NULL){
                                $atIntel = "UPDATE personagem SET intel_personagem = $intel WHERE id_personagem = $id";
                                $atIntelQ = mysqli_query($conn, $atIntel);
                            } 
                            if($saber!=NULL){
                                $atSaber = "UPDATE personagem SET sabedoria_personagem = $saber WHERE id_personagem = $id";
                                $atSaberQ = mysqli_query($conn, $atSaber);
                            } 
                            if($arm!=NULL){
                                $atArm = "UPDATE personagem SET cat_armadura = '$arm' WHERE id_personagem = $id";
                                $atArmQ = mysqli_query($conn, $atArm);
                            } 
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