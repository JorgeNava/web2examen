<?php
    
    function registraUsuario(){
        echo "NUEVO USUARIO REGISTRADO - " , $_POST["txtUsr"];
        $conn = mysqli_connect("localhost","root","","js22_w2_p2");
        if($conn){
            $q = "INSERT INTO usuarios(Nombre,Apellidos,Sexo,Correo,Telefono,IdEstatu,password)"
            ." VALUES ('".$_POST["txtNombre"]."' "
            ." , '".$_POST["txtApellidos"]."', '".$_POST["rdSex"]."'"
            ." , '".$_POST["txtCorreo"]."', '".$_POST["txtTelefono"]."'"
            .", 1, '".$_POST["txtPwd1"]."') ";
            mysqli_query($conn,$q);
        }
    }

    if(isset($_POST["txtNombre"]))
        registraUsuario();    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <script>
        function login(){
            validado = true
            f = document.getElementById("fRegistro");
            if(f.txtPwd1.value != f.txtPwd2.value)
                alert("Las contrasenas no coinciden")
            if(f.txtNombre.value == ""  || f.txtUsr.value ==""  || f.txtPwd1.value ==""){
                validado = false;
                alert("Faltan datos requeridos");
            }
            if(validado == true)
                f.submit();
        } 
</script>
</head>
<body>
<header>
    <nav> </nav>
</header>
<section>
    <form name="fRegistro" method="POST" id="fRegistro">     
        <p>
            <label for="txtUsr"> Usuario </label>
            <input type="text" name="txtUsr" value="usuario1">
        </p> 
        <p>
            <label for ="txtPw1" > Contrasena </label>
            <input type ="password" name="txtPwd1" value="cisco">
            <label for ="txtPw2" > Confirmar contraseña </label>
            <input type ="password" name="txtPwd2" value="cisco">
        </p>
        <p>
            <label for ="txtNombre"> Nombre </label>
            <input type ="text" name="txtNombre" value="usuario1">
        </p> 
        <p>
            <label for ="txtApellidos" > Apellidos </label>
            <input type ="text" name="txtApellidos" value="prueba">
        </p>
        <p>
            <label for ="rdSex" > Sexo </label>
            <input type="text" name="rdSex" value="M">
        </p>
        <p>
            <label for="txtCorreo"> Correo </label>
            <input type="text" name="txtCorreo" value="usuario1@gmail.com">
        </p>
        <p> 
            <label for="txtTelefono"> Telefono </label>
            <input type="text" name="txtTelefono" value="1234567">
        </p>
        <button type="button" onclick="login()"> Registrarse </button>
        <button type="button"> Cancelar </button>
</form>
</body>
</html>