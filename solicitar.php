<?php

    function agregaEvento(){
        $conn = mysqli_connect("localhost", "root","","js22_w2_p2");
        
        if($conn){
            $q = "INSERT INTO eventos(Nombre".", Inicio".", 
                                             Fin".", IdUsuarioResponsable)"
   //                                         "." VALUES(".$_POST["listaCategorias"].", "
                                            ."'".$_POST["txtDescripcion"]."', )";
        }

    }

      if(isset($_POST["u"]))
        agregaEvento();
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registrar un evento </title>

    <script>
        function validarAgregar(){
            f = document.getElementaryId("fSolicitar");

            if(f.txtEvento.value == "" || f.txtInicio.value == "" || f.txtFin.value == "")
                alert("Todos los campos son requeridos");
            else 
            f.submit();
        }

        </script>

</head>
<body>
        <h1> Registrar un evento </h1>
        <form action="" method="POST" name="fSolicitar" id="fSolicitar">
            <input type ="hidden" name="u" value = "<?php echo $_GET['u']; ?>">
                
            <p>
            <label for ="txtUsr"> Evento </label>
            <input type ="text" name="txtEvento" value="">
</p> 

          <!--      <label for=""> Categoria: </label>
                <select name="ListaCategorias" id="listaCategorias">
                    <option value = ""> Seleccione </option>
                    <option value="1"> Cat 1 </option>
                    <option value="2"> Cat 2 </option>
                 <option value="3"> Cat 3 </option>
    -->

    <p>
            <label for ="txtUsr"> Inicio del evento </label>
            <input type ="text" name="txtInicio" value="">
</p> 


  <!--  <p>
        <label for="txtDescripcion"> Descripcion: </label>
        <textarea name="txtDescripcion" id="txtDescripcion"> </textarea>
</p>
    -->
    <p>
            <label for ="txtUsr"> Fin del evento </label>
            <input type ="text" name="txtFin" value="">
</p> 
    
</select>
<button type="button" onclick ="validarAgregar()" > Registrar </button>
<button type="button"> Cancelar </button>


</body>
</html>