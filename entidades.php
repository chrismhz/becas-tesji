<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Becarios-Entidades</title>
</head>
<body>
    <h1>.:REGISTRO ENTIDADES:.</h1> 
    <section>
        <form action="" method="post">
            <table>
                <tr>
                    <td>
                        <label>Entidad Federativa</label>
                    </td>
                    <td>
                        <input type="text" name="txtNombreEntidadF">
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
            <th>Nombre Entidad</th>
        </tr>

        <?php
        include ("conexion/conexion.php");
        $consulta = "SELECT * FROM entidadf_cmh";

        #Ejecutar la consulta
        $entidadesf = mysqli_query($conexion,$consulta);

        #Extraer los datos del objeto de la consulta 
        while($regEntidadF = mysqli_fetch_assoc($entidadesf)){
            echo "<tr>" .
                "<td>" . $regEntidadF["idEntidadF"] . "</td>" .
                "<td>" . $regEntidadF["nombre"] . "</td>" .
                "</tr>";
        }
    
        ?>

    </table>
</body>
</html>