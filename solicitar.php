<?php

    function agregaSolicitud(){
        $conn = mysqli_connect("localhost", "root","","app02");
        
        if($conn){
            $q = "INSERT INTO solicitudes(IdCategoria".", Descripcion, 
                                            IdUsuarioSolicita, FechaCreacion".", IdUsuarioAtiende)"
                                            "." VALUES(".$_POST["listaCategorias"].", "
                                            ."'".$_POST["txtDescripcion"]."', )";
        }

    }

    if(isset($_POST["u"]))
        agregaSolicitud();

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar una solicitud</title>

    <script>
        function validarAgregar(){
            f = document.getElementaryId("fSolicitar");

            if(f.listaCategorias.value == "" || f.txtDescripcion.value == "")
                alert("Todos los campos son requeridos");
            else 
            f.submit();
        }

        </script>

</head>
<body>
        <h1> Nueva solicitud </h1>
        <form action="" method="POST" name="fSolicitar" id="fSolicitar">
            <input type ="hidden" name="u" value = "<?php echo $_GET['u']; ?>">
                
            <p>
                <label for=""> Categoria: </label>
                <select name="ListaCategorias" id="listaCategorias">
                    <option value = ""> Seleccione </option>
                    <option value="1"> Cat 1 </option>
                    <option value="2"> Cat 2 </option>
                    <option value="3"> Cat 3 </option>


</select>
</p>
<p>
        <label for="txtDescripcion"> Descripcion: </label>
        <textarea name="txtDescripcion" id="txtDescripcion"> </textarea>
</p>
<button type="button" onclick ="validarAgregar()" > Solicitar </button>
<button type="button"> Cancelar </button>


</body>
</html>