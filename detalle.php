<?php

    function detalle($u){
        $str = "";
        $conn = mysqli_connect("localhost","root","","app02");
        if($conn){
            $q = "SELECT * FROM usuarios WHERE Id = ".$u."";
            $r = mysql_query($conn,$q);
            while($f = mysql_fetch_assoc($r)){
                $str .= "<input type='hidden' name='u' value = '".$f["Id"]."'>";
                $str .="<input type ='hidden' name ='admitir' value='1'/>";
                $str .= "<br/> Nombre: " .$f["Nombre"];
                $str .="<br/> Apellidos" .$f["Apellidos"];
                $str .="<br/> Sexo ". $f["Sexo"];
                $str .= "<br/> Correo: ". $f["Correo"];
                $str .= "<br/> Telefono: ". $f["Telefono"];
                if($f["IdEstatus"] == 1)
                    $str .="<button> Admitir </button>";


            }//

        }
        return $str;
    } // End detalle
    
    function admitir($u){
        $conn = mysqli_connect("localhost", "root", "", "app02");
        if($conn){
            $q = "UPDATE usuarios SET IdEstatus = 2 WHERE Id = ".$u." ;";
            mysqli_query($conn,$q);
        }
    }

if(isset["u"]) and isset($_GET["admitir"])
    admitir($_GET)


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle usuario</title>
</head>
<body>
    <section>
        <form action="">
            <?php echo detalle($_GET["u"]); ?>
        </form>
</section>
</body>
</html>