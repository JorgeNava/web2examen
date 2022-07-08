<?php

function verUsuariosRegistrados(){
    $conn = mysqli_connect("localhost","root","","app02");
    $str = "";
    if($conn){
        $q = " SELECT * "
            . " FROM usuarios ";
        $r = mysqli_query($conn,$q);
        
        while($f = mysqli_fetch_assoc($r)){
            $str .="<p>";
            $str .= "<a href='detalle.php?u=".$f["Id"]."'> Ver detalle </a>";
            $str .= " ". $f["Nombre"];
            $str .= " ". $f["Apellidos"] ." <br/>";
            $str .= "</p>";
        }
          
    }
    return $str;

 //   echo "Hola";
} // end verUsuariosRegistrados
  //  if(isset($_GET["u"])){
   //     if($_GET["u"] == "admin"){
     //           verUsuariosRegistrados();
   //     }
  //  }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>
<body>
    
    <section>
        <?php
            if(isset($_GET["u"])){
                echo "<h1> Lista de usuarios </h1>";
                if($_GET["u"] == "admin"){
                    
                    echo verUsuariosRegistrados();

                } 
                else{
                    echo "<a> ver mis solicitudes </a>";
                    echo "<a href='solicitar.php'> realizar solicitudes </a>";
                }

            }
            ?>
</body>
</html>