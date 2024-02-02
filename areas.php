<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Becarios-Areas</title>
</head>
<body>
    <h1>.:REGISTRO AREAS:.</h1>
    <section>
        <form action="" method="post">
            <table>
                <tr>
                    <td>
                        <label>Áreas</label>
                    </td>
                    <td>
                        <input type="text" name="txtArea">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Descripción</label>
                    </td>
                    <td>
                        <input type="text" name="txtDescripcion">
                    </td>
                </tr>

                <tr>
                    <td>
                        <button type="reset">Cancelar</button>
                    </td>
                    <td>
                        <button type="submit">Enviar</button>
                    </td>
                </tr>
            </table>
        </form>
    </section>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>Area</th>
            <th>Descripcion</th>
        </tr>

    <?php
        include ("conexion/conexion.php");
        $consulta = "SELECT * FROM area_cmh";

        #Ejecutar la consulta
        $areas = mysqli_query($conexion,$consulta);
        
        #Extraer los datos del objeto de la consulta 
        while($regArea = mysqli_fetch_assoc($areas)){
            echo "<tr>" .
                "<td>" . $regArea["idArea"] . "</td>" .
                "<td>" . $regArea["nombre"] . "</td>" . 
                "<td>" . $regArea["descripcion"] . "</td>" .
                "</tr>";
        }
    ?>
    
    </table>
</body>
</html>