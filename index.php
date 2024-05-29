<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<body>

<script>
    function respt(){
        const resultado = confirm('seguro de eliminar?')
        return resultado;
    }
</script>

<p class="h1 text-center">CRUD</p>
<?php
include('conn.php');        
include('eliminar.php');

?>
<div class="row p-2 border border-bottom p-5">
    <form method="post" class="col-4 d-flex flex-column gap-4 align-items-center ">
        <p class="h1">FORMULARIO</p>
        <?php
            include('conn.php');        
            include('registrar.php');       
        ?>
        NOMBRE:<input class="w-100 py-2 rounded border" type="text" name="nombre" id="nombre">
        EDAD:<input class="w-100 py-2 rounded border" type="text" name="edad" id="edad">
        <button value="ok" class="w-50 btn btn-success" name="enviar">enviar</button>
    </form>

    <div id="tabla" class="col-8 rounded-4 p-3 " style="background-color: #ddd;">
    <table class="w-100 ">
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th>edad</th>
            <th></th>
        </tr>


        <?php
        include('conn.php');

        $sql = $conn->query("SELECT * FROM persona");
        while($fila=$sql->fetch_object()){
            ?>
        <tr  class="border-bottom border-dark" style="height: 50px;font-size:25px">
            
            <td><?=$fila->id?></td>
            <td><?=$fila->nombre?></td>
            <td><?=$fila->edad?></td>
           
            <td><a href="editar.php?id=<?=$fila->id?>"  class="bg-warning p-2  pt-1 rounded text-white"><i class="bi bi-pencil-square"></i></a>
            <a onclick="return respt()" href="index.php?id=<?=$fila->id?>"  class="bg-danger p-2  pt-1 rounded text-white"><i class="bi bi-trash3-fill"></i></a></td>

            </tr>
            <?php
        }
        ?>
    </table>
    </div>


</div>


</body>
</html>