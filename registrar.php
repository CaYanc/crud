<?php

if(!empty($_POST["enviar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["edad"])){

        $nombre=$_POST["nombre"];
        $edad=$_POST["edad"];

        $sql =$conn->query("INSERT INTO persona(nombre,edad)VALUES('$nombre','$edad')");

        if($sql==1){
            echo "<div class='alert alert-success'>registrado correctamente</div>";
        }else{

            echo "<div class='alert alert-danger'>campo vacio</div>";
        }
    }else{
        echo "<div  class='alert alert-danger'>registrado incorrectamente</div>";

    }
}

?>