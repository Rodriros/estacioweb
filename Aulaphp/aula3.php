<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method="get" action="aula4.php">
               Nome: <input type="text" name="nome"/> <br>
               Idade: <input type="text" name="idade"/> <br>
               <input type="submit" value="enviar"/> <br>
        </form>

        <?php
         $nome = $_GET["nome"];
         $idade = $_GET["idade"];  

        echo "Nome: ".$nome. " Idade:".$idade;
        ?>
        

</body>
</html>