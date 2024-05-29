<?php

include('conn.php');

if(!empty($_GET["id"])){
    $id=$_GET["id"];

    $sql = $conn->query("DELETE FROM persona WHERE id=$id");

    if($sql==1){
        echo"<div class='alert alert-success'>eliminado correctamente</div>";
    }else{
        echo"<div class='alert alert-danger'>eliminado incocorrectamente</div>";
    }
}


?>