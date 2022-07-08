<?php
    
    function registraUsuario(){
        $conn = mysqli_connect("localhost","root","","app02");
       
        if($conn){
            $q = "INSERT INTO usuarios(usuario,Nombre,Apellidos,Sexo,Correo,Telefono,IdEstatu,password)"
            ." VALUES ('".$_POST["txtUsr"]."', '".$_POST["txtNombre"]."' "
            ." , '".$_POST["txtApellidos"]."', '".$_POST["rdSex"]."'"
            ." , '".$_POST["txtCorreo"]."', '".$_POST["txtTelefono"]."'"
            .", 1, '".$_POST["txtPwd1"]."') ";
        

          //  mysqli_query($conn,$q);
        }


    } // end registraUsuario
    
  //  if(isset($_POST["txtUsr"]))
      //  if(isset($_POST["txtUsr"]))
//        registraUsuario();    
    //echo $_POST["txtUsr"];
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
            f = document.getElementById("fRegistro");

            if(f.txtPw1.value != f.txtPw2.value)
                alert("Las contrasenas no coinciden")
        
            if(f.txtNombre.value == ""  || f.txtUsr.value ==""  || f.txtPw1.value ==""){
                validado = false;
                //f.txtUsr.style.border-color="red";
                alert("Faltan datos requeridos");
            }
            if(validado == true)
            f.submit();        
       
        } //End login 
</script>
</head>
<body>
<header>
    <nav> </nav>
</header>
<section>
    <form action="" name="fRegistro" method="POST" id="fRegistro">     
        <p>
            <label for ="txtUsr"> Usuario </label>
            <input type ="text" name="txtUsr" value="">
</p> 
        <p>
        <label for ="txtPw1" > Contrasena </label>
            <input type ="password" name="txtPw1" value="">
            <label for ="txtPw2" > Confirmar contraseña </label>
            <input type ="password" name="txtPw2" value="">

</p>
        <p>
            <label for ="txtNombre"> Nombre </label>
            <input type ="text" name="txtNombre" value="">
</p> 

        <p>
            <label for ="txtApellidos" > Apellidos </label>
            <input type ="text" name="txtApellidos" value="">
</p>

        <p>
            <label for ="txtUsr" > Sexo </label>
            <input type ="radio" name="rdSex" value="F"> Femenino
            <input type ="radio" name="rdSex" value="M"> Masculino
 </p>
       
        <p>
            <label for="txtCorreo"> Correo </label>
            <input type="text" name="txtCorreo" value="">
    </p>
        <p> 
            <label for="txtTelefono"> Telefono </label>
            <input type="text" name="txtTelefono" value="">
    </p>
        <button type="button" onclick="login()"> Registrarse </button>
        <button type="button"> Cancelar </button>
   
</form>
</body>
</html>