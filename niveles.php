<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Becarios-Niveles</title>
</head>
<body>
    <h1>.:REGISTRO NIVELES:.</h1>    
    <section>
        <form action="" method="post">
            <table>
                <tr>
                    <td>
                        <label>Nombre Nivel</label>
                    </td>
                    <td>
                        <input type="text" name="txtNombreNivel">
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
            <th>Nombre Nivel</th>
        </tr>

    <?php
        include ("conexion/conexion.php");
        $consulta = "SELECT * FROM nivel_cmh";

        #Ejecutar la consulta
        $niveles = mysqli_query($conexion,$consulta);

        #Extraer los datos del objeto de la consulta 
        while($regNivel = mysqli_fetch_assoc($niveles)){
            echo "<tr>" .
                "<td>" . $regNivel["idNivel"] . "</td>" .
                "<td>" . $regNivel["nombreNivel"] . "</td>" .
                "</tr>";
        }
    
    ?>

    </table>
</body>
</html>