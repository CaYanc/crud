<?php

include('conn.php');

$id=$_GET["id"];


$sql = $conn->query("SELECT * FROM persona WHERE id = $id");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<body>

<form method="post" class="col-4 d-flex flex-column gap-4 align-items-center m-auto">
    <?php
    echo $id;
    include('btn-editado.php')
    ?>
    <input type="hidden" name="id" value="<?=$_GET["id"]?>">
        <p class="h1">FORMULARIO</p>
        <?php
        
            while($fila=$sql->fetch_object()){
                ?>
                
                NOMBRE:<input value="<?=$fila->nombre?>" class="w-100 py-2 rounded border" type="text" name="nombre" id="nombre">
                EDAD:<input value="<?=$fila->edad?>" class="w-100 py-2 rounded border" type="text" name="edad" id="edad">
                <button value="ok" class="w-50 btn btn-success" name="modificar">modificar</button>
                
                
                <?php
            }      
        ?>
      
    </form>
    
</body>
</html>