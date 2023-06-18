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
                
                    <!--<h1 class = "textocara">Mostre aqui o registro!</h1> -->
                <table>
                    <thead>
                        <th>ID</th>
                        <th>Pontos de Vida</th>
                        <th>Tipo Geográfico</th>
                        <th>Constituição</th>
                        <th>Força</th>
                        <th>Resistência</th>
                        <th>Inteligência</th>
                        <th>Sabedoria</th>
                        <th>Categoria Armadura</th>
                        <th>Vida</th>
                    </thead>
                    <tbody>
                        <?php 
                            include_once("./conexao.php");
                            echo "<br>";
                            $id = $_GET['txtN1'];

                        if(isset($_GET['visualizar'])){
                            $view = "select * FROM personagem WHERE id_personagem = $id";
                            $viewQ = mysqli_query($conn, $view);

                            $row = mysqli_fetch_assoc($viewQ);
                            
                            foreach($row as $i){
                                echo "<td>$i</td>";
                            }
                        }                         
                        ?>
                    </tbody>
                </table> 
                <form class ="formHellPost2" action="../index.php" method="post"> 
                    <input class = "btnForm2" type="submit" value="Voltar">
                </form>
            </div>            
        </div>
    </div>
</body>
</html>

<style>
    table {
        border: 2px solid white;
        text-align: center;
    }

    thead{
        border: top radius 12px;
        font-size: 20px;
        width: 600px;
        background-color: brown;
        color: khaki;
        width: 60px;
        border-radius: 12px;
    }

    td{
        border: 2px solid white;
        background-color: khaki;
        color: brown;
    }

    .centralDiv {
    width: 70vw;
    
}
</style>