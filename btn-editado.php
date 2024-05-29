<?php


if(!empty($_POST["modificar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["edad"])){

        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $edad=$_POST["edad"];
    
        $sql=$conn->query("UPDATE persona SET nombre='$nombre', edad='$edad' WHERE id='$id'");

        if($sql==1){
            header("location: index.php");
        }else{
        echo "campo vacio";
        }
    }else{
        echo "campo vacio";
    }
}
?>