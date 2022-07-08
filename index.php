  <?php

    function validarUsuario($u,$p){
        $conn = mysqli_connect("localhost","root","","app02");
        $existe="";
        
        if($conn){
            $q = "SELECT count(*) as existe "
                ." from usuarios "
                ." WHERE usuario='".$u."' AND password = '".$p."' AND IdEstatu > 1 ;" ;
            echo $q;
                /* */
            $r = mysqli_query($conn,$q);

           while($f = mysqli_fetch_assoc($r)){
                $existe = $f["existe"];

            }

            

        }
        //mysqli_close($conn);
        //echo $existe;
        
        return $existe;
        


    } //end validaUsuario

    //echo validarUsuario("admin","123");


    if(isset($_POST["txtUsr"])){
        echo "hi".validarUsuario($_POST["txtUsr"], $_POST["txtPwd"]);
        if(validarUsuario($_POST["txtUsr"], $_POST["txtPwd"]) == 1)
            header("location: principal.php");
//        else{
//            echo "<script>"
//                . "alert('Datos de accesso incorrecto');"
//                . "</script> "; 
//        }
    }

 ?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
</head>
<body>
    <header>
        <nav>

        </nav>
    </header>
    <section>
        <fieldset>
            <legend>Iniciar sesion</legend>
            <form action="" name="fLogin" method="POST">
                <p>
                    <input type="text" name= "txtUsr" value ="" placeholder="Usuario">
                </p>
                <p>
                <input type="password" name= "txtPwd" id="" placeholder="Contrasena">

                </p>
                <button>Iniciar</button>
                <a href="./principal.php"></a>

</br>           
                <a href="./registro.php"> Solicitud de registro </a>
            </form>
        </fieldset>
    </section>
</body>
</html>