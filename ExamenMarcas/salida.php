<head>
    <title>Forms</title>
    <link rel="stylesheet" href="estiloExamen.css">
</head>
    
<body>
    <header>
        inscripcion a curso
    </header>

    <fieldset id="salida">
        <legend>Datos recibido</legend>
        <table>
            <tr>
                <td colspan="2" class="encabezado">Datos personales</td>
                <td colspan="2" class="encabezado">Datos complementarios</td>
            </tr>

            <tr>
                <td>Apellidos</td>
                <td>
                    <?php 
                   echo $_GET['Apellidos'];
                    ?>
                </td>
                <td>Localidad</td>
                <td>
                    <?php 
                    echo $_GET['provincia'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td>
                    <?php 
                    echo $_GET['Nombre'];
                    ?>
                </td>
                <td>Provincia</td>
                <td>
                    <?php 
                    echo $_GET['provincia'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>DNI</td>
                <td>
                    <?php 
                    echo $_GET['DNI'];
                    ?>
                </td>
                <td>Fecha de Nacimiento</td>
                <td>
                    <?php 
                    echo $_GET['fecha'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>Edad</td>
                <td>
                    <?php 
                    echo $_GET['edad'];
                    ?>
                </td>
                <td>Tipo de domicilio</td>
                <td>
                    <?php 
                    echo $_GET['domicilio_tipo'];
                    ?>
                </td>
            </tr>
            <tr>
                <td rowspan="2">Sexo</td>
                <td rowspan="2">
                    <?php 
                    echo $_GET['sexo'];
                    ?>
                </td>
                <td>Direccion</td>
                <td>a
                    <?php 
                    echo $_GET['nombre_calle'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>Codigo postal</td>
                <td>
                    <?php 
                    echo $_GET['codigoPostal'];
                    ?>
                </td>
            </tr>

        </table>
    </fieldset>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer>
     <a href="formulario.html">Volver al formulario</a>
    </footer>
</body>