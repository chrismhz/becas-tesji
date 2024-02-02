<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Becarios-Generos</title>
</head>
<body>
    <h1>.:REGISTRO GENEROS:.</h1> 
    <section>
        <form action="" method="post">
            <table>
                <tr>
                    <td>
                        <label>Genero</label>
                    </td>
                    <td>
                        <input type="text" name="txtGenero">
                    </td>

                    <tr>
                    <td>
                        <button type="reset">Cancelar</button>
                    </td>
                    <td>
                        <button type="submit">Enviar</button>
                    </td>
                </tr>
                </tr>
            </table>
    </section>   
    <table border="1">
        <tr>
            <th>No.</th>
            <th>Genero</th>
        </tr>  

        <?php
        include ("conexion/conexion.php");
        $consulta = "SELECT * FROM genero_cmh";

        #Ejecutar la consulta
        $generos = mysqli_query($conexion,$consulta);

        #Extraer los datos del objeto de la consulta 
        while($regGenero = mysqli_fetch_assoc($generos)){
            echo "<tr>" .
                "<td>" . $regGenero["idGenero"] . "</td>" .
                "<td>" . $regGenero["Genero"] . "</td>" .
                "</tr>";
        }
    
        ?>

    </table>
</body>
</html>