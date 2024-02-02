<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Becarios</title>
</head>
<body>
    <h1>.:REGISTRO BECARIOS:.</h1>
    <section>
        <form action="registrar-becarios.php" method="post">
                    <label>Nombre</label>
                    <input type="text" name="txtNombre">
                <br>
                <br>
                    <label>Apellido Paterno</label>
                    <input type="text" name="txtApellidop">
                <br>
                <br>
                    <label>Apellido Materno</label>
                    <input type="text" name="txtApellidom">
                <br>
                <br>
                    <label>Genero</label>
                    <select name="selectGenero" size="1">
                        <option value="No seleccionaste genero">--Seleccione--</option>
                        <option value="hombre">Hombre</option>
                        <option value="mujer">Mujer</option>
                    </select>
                <br>
                <br>
                    <label>Area</label>
                    <select name="selectArea" size="1">
                        <option value="No seleccionaste area">--Seleccione--</option>
                        <option value="fisico">I. FISICO MATEMATICAS Y CS. DE LA TIERRA</option>
                        <option value="biologia">II. BIOLOGIA Y QUIMICA</option>
                        <option value="medicina">III. MEDICINA Y CS. DE LA SALUD</option>
                        <option value="humanidades">IV. HUMANIDADES Y CS. DE LA CONDUCTA</option>
                        <option value="ciencias">V. CIENCIAS SOCIALES</option>
                        <option value="biotecnologia">VI. BIOTECNOLOGIA Y CS. AGROPECUARIAS</option>
                        <option value="ingenierias">VII. INGENIERIAS</option>
                    </select>
                <br>
                <br>
                    <label>Nivel</label>
                    <select name="selectNivel" size="1">
                        <option value="No seleccionaste nivel">--Seleccione--</option>
                        <option value="doc">DOC</option>
                        <option value="mae">MAE</option>
                        <option value="esp">ESP</option>
                    </select>
                <br>
                <br>
                    <label>Institución</label>
                    <select name="selectInstitucion" size="1">
                        <option value="No seleccionaste Area">--Seleccione--</option>
                        <option value="1">AGENCIA ALEMANA DE COOPERACION TECNICA-GIZ</OPTION>
                        <option value="2">AYUNTAMIENTO MUNICIPAL DE TEXCOCO</OPTION>
                        <option value="3">BUAP</OPTION>
                        <option value="4">CENAM</OPTION>
                        <option value="5">CENIDET</OPTION>
                        <option value="6">CENTRO DE DERECHOS HUMANOS DE LA MONTANA TLACHINOLLAN</OPTION>
                        <option value="7">CENTRO DE DERECHOS HUMANOS FRAY BARTOLOME DE LAS CASAS</OPTION>
                        <option value="8">CENTRO DE INVESTIGACION DE CHIAPAS</OPTION>
                        <option value="9">CENTRO DE INVESTIGACION Y DESARROLLO DE LOS RECURSOS NATURALES DE SONORA</OPTION>
                        <option value="10">CENTRO DE INVESTIGACIONES BIOLOGICAS</OPTION>
                        <option value="11">CENTRO DE INVESTIGACIONES SOCIOLOGIA Y TECNOLOGIA</OPTION>
                        <option value="12">CENTRO DE INVESTIGACIONES Y DESAROLLO CONDUMEX</OPTION>
                        <option value="13">CENTRO DEL CAMBIO GLOBAL Y LA SUSTENTABILIDAD EN EL SURESTE-CCGSS</OPTION>
                        <option value="14">CENTRO JURIDICO UNIVERSITARIO</OPTION>
                        <option value="15">CENTRO NACIONAL DE METROLOGIA-CENAM</OPTION>
                        <option value="16">CETYS</OPTION>
                        <option value="17">CIAD</OPTION>
                        <option value="18">CIATEC</OPTION>
                        <option value="19">CIATEJ</OPTION>
                        <option value="20">CIBNOR</OPTION>
                        <option value="21">CICESE</OPTION>
                        <option value="22">CICY</OPTION>
                        <option value="23">CIDE</OPTION>
                        <option value="24">CIDESI</OPTION>
                        <option value="25">CIDETEQ</OPTION>
                        <option value="26">CIESAS</OPTION>
                        <option value="27">CIIDET</OPTION>
                        <option value="28">CIMAT</OPTION>
                        <option value="29">CIMAV</OPTION>
                        <option value="30">CIMMYT</OPTION>
                        <option value="31">CINVESTAV</OPTION>
                        <option value="32">CIO</OPTION>
                        <option value="33">CIQA</OPTION>
                        <option value="34">COLEF</OPTION>
                        <option value="35">COLMEX</OPTION>
                        <option value="36">COLMEXIQUENSE</OPTION>
                        <option value="37">COLMICH</OPTION>
                        <option value="38">COLPOS</OPTION>
                        <option value="39">COLSAN</OPTION>
                        <option value="40">COLSON</OPTION>
                        <option value="41">COMERCIO JUSTO MEXICO</OPTION>
                        <option value="42">COMISION ESTATAL DE DERECHOS HUMANOS DE JALISCO</OPTION>
                        <option value="43">COMISION NACIONAL DE AREAS NATURALES PROTEGIDAS-CONANP</OPTION>
                        <option value="44">COMITE DE DERECHOS HUMANOS FRAY PEDRO LORENZO DE LA NADA</OPTION>
                        <option value="45">CONACULTA</OPTION>
                        <option value="46">CONEVAL</OPTION>
                        <option value="47">CONGRESO DEL ESTADO DE SONORA</OPTION>
                        <option value="48">CONSEJO PUEBLA DE LECTURA</OPTION>
                        <option value="49">DIRECCION GENERAL DE EDUCACION SUPERIOR TECNOLOGICA</OPTION>
                        <option value="50">DISTRIBUIDORA DE MAQUINAS Y MUEBLES DE MERIDA</OPTION>
                        <option value="51">EATON TECHNOLOGIES</OPTION>
                        <option value="52">ECOSUR</OPTION>
                        <option value="53">EDUCACION SUPERIOR DE CELAYA</OPTION>
                        <option value="54">ELVAN DE MEXICO</OPTION>
                        <option value="55">ERAT</OPTION>
                        <option value="56">EXCARE LOS CABOS</OPTION>
                        <option value="57">FEMSA</OPTION>
                        <option value="58">FLACSO</OPTION>
                        <option value="59">GOBIERNO DEL ESTADO DE CHIAPAS</OPTION>
                        <option value="60">GOBIERNO DEL ESTADO DE TABASCO</OPTION>
                        <option value="61">GOBIERNO DEL ESTADO DE YUCATAN</OPTION>
                        <option value="62">GOBIERNO DEL ESTADO DE ZACATECAS</OPTION>
                        <option value="63">GRANJAS CARROLL DE MEXICO</OPTION>
                        <option value="64">HERMANOS EN EL CAMINO ALBERGUE DE MIGRANTES</OPTION>
                        <option value="65">HOSPITAL ABC</OPTION>
                        <option value="66">HOSPITAL GENERAL DE MEXICO</OPTION>
                        <option value="67">HOSPITAL GENERAL DR. MANUEL GEA GONZALEZ</OPTION>
                        <option value="68">HOSPITAL INFANTIL DE MEXICO FEDERICO GOMEZ</OPTION>
                        <option value="69">IMP</OPTION>
                        <option value="70">IMSS</OPTION>
                        <option value="71">INAH</OPTION>
                        <option value="72">INAOE</OPTION>
                        <option value="73">INAPESCA</OPTION>
                        <option value="74">INBA</OPTION>
                        <option value="75">INCAN</OPTION>
                        <option value="76">INECOL</OPTION>
                        <option value="77">INEGI</OPTION>
                        <option value="78">INER</OPTION>
                        <option value="79">INIFAP</OPTION>
                        <option value="80">ININ</OPTION>
                        <option value="81">INNSZ</OPTION>
                        <option value="82">INSP</OPTION>
                        <option value="83">INSTITUTO DE INVESTIGACIONES CIENTIFICAS</OPTION>
                        <option value="84">INSTITUTO DE INVESTIGACIONES ELECTRICAS-IIE</OPTION>
                        <option value="85">INSTITUTO DE OFTALMOLOGIA CONDE DE VALENCIANA</OPTION>
                        <option value="86">INSTITUTO INTERAMERICANO DE COOPERACION PARA LA AGRICULTURA</OPTION>
                        <option value="87">INSTITUTO MEXICANO DE TECNOLOGIA DEL AGUA</OPTION>
                        <option value="88">INSTITUTO MEXICANO DEL TRANSPORTE</OPTION>
                        <option value="89">INSTITUTO NACIONAL DE CARDIOLOGIA IGNACIO CHAVEZ</OPTION>
                        <option value="90">INSTITUTO NACIONAL DE GERIATRIA</OPTION>
                        <option value="91">INSTITUTO NACIONAL DE NEUROLOGIA Y NEUROCIRUGIA MANUEL VELASCO SUAREZ</OPTION>
                        <option value="92">INSTITUTO NACIONAL DE PEDIATRIA</OPTION>
                        <option value="93">INSTITUTO NACIONAL DE PEDIATRIA-INP</OPTION>
                        <option value="94">INSTITUTO NACIONAL DE PSIQUIATRIA</OPTION>
                        <option value="95">IPICYT</OPTION>
                        <option value="96">IPN</OPTION>
                        <option value="97">ISSSTE</OPTION>
                        <option value="98">IT CELAYA</OPTION>
                        <option value="99">IT CHIHUAHUA</OPTION>
                        <option value="100">IT CIUDAD MADERO</OPTION>
                        <option value="101">IT DURANGO</OPTION>
                        <option value="102">IT ENSENADA</OPTION>
                        <option value="103">IT LA LAGUNA</OPTION>
                        <option value="104">IT LEON</OPTION>
                        <option value="105">IT MAZATLAN</OPTION>
                        <option value="106">IT MERIDA</OPTION>
                        <option value="107">IT MORELIA</OPTION>
                        <option value="108">IT ORIZABA</OPTION>
                        <option value="109">IT SONORA</OPTION>
                        <option value="110">IT SUPERIOR CALKINI</OPTION>
                        <option value="111">IT SUPERIOR MULEGE</OPTION>
                        <option value="112">IT SUPERIOR SINALOA</OPTION>
                        <option value="113">IT TEPIC</OPTION>
                        <option value="114">IT TIJUANA</OPTION>
                        <option value="115">IT TLAJOMULCO</OPTION>
                        <option value="116">IT TUXTEPEC</OPTION>
                        <option value="117">IT TUXTLA GUTIERREZ</OPTION>
                        <option value="118">IT VERACRUZ</OPTION>
                        <option value="119">ITAM</OPTION>
                        <option value="120">ITESM</OPTION>
                        <option value="121">ITESO</OPTION>
                        <option value="122">KERRY INGREDIENTS DE MEXICO</OPTION>
                        <option value="123">LANIA</OPTION>
                        <option value="124">LASFALTO</OPTION>
                        <option value="125">MABE</OPTION>
                        <option value="126">MANUFACTURERA DE CIGUENALES DE MEXICO</OPTION>
                        <option value="127">MEDICA SUR</OPTION>
                        <option value="128">MEXFAM</OPTION>
                        <option value="129">MINA VIRGEN DEL CARMEN</OPTION>
                        <option value="130">MIRACLE BUSINESS NETWORK</OPTION>
                        <option value="131">MORA</OPTION>
                        <option value="132">MUNICIPIO DE SAN JERONIMO SOSOLA OAXACA</OPTION>
                        <option value="133">NEMAK</OPTION>
                        <option value="134">NUTEK</OPTION>
                        <option value="135">OAXACA AEROSPACE</OPTION>
                        <option value="136">OBSERVATORIO URBANO DE LEON</OPTION>
                        <option value="137">OTRASENDA</OPTION>
                        <option value="138">PRO NATURA</OPTION>
                        <option value="139">PROBAYES AMERICAS</OPTION>
                        <option value="140">REUSSITE ADECCO</OPTION>
                        <option value="141">ROBERT BOSCH SISTEMAS DE FRENOS</OPTION>
                        <option value="142">SAGARPA</OPTION>
                        <option value="143">SECRETARIA  DE SALUD</OPTION>
                        <option value="144">SECRETARIA DE LA FUNCION PUBLICA</OPTION>
                        <option value="145">SECRETARIA DE SALUD</OPTION>
                        <option value="146">SEMARNAT</OPTION>
                        <option value="147">SEP</OPTION>
                        <option value="148">SISTEMAS DE DISENO E INGENIERIAS</OPTION>
                        <option value="149">SISTEMAS TECNICOS DE CONTROL</OPTION>
                        <option value="150">SOFTEK GLOBAL EDESIGN</OPTION>
                        <option value="151">SOFTLOGIK</OPTION>
                        <option value="152">TAMSA</OPTION>
                        <option value="153">TESE</OPTION>
                        <option value="154">U CIENCIAS Y ARTES CHIAPAS</OPTION>
                        <option value="155">U COLIMA</OPTION>
                        <option value="156">U DE LA CIENEGA EDO MICHOACAN</OPTION>
                        <option value="157">U DEL CARIBE</OPTION>
                        <option value="158">U DEL MAR</OPTION>
                        <option value="159">U ESTATAL SONORA</OPTION>
                        <option value="160">U GUADALAJARA</OPTION>
                        <option value="161">U GUANAJUATO</OPTION>
                        <option value="162">U JUAREZ AUT TABASCO</OPTION>
                        <option value="163">U JUAREZ EDO DURANGO</OPTION>
                        <option value="164">U MICH SNH</OPTION>
                        <option value="165">U OCCIDENTE</OPTION>
                        <option value="166">U PAPALOAPAN</OPTION>
                        <option value="167">U QUINTANA ROO</OPTION>
                        <option value="168">U SONORA</OPTION>
                        <option value="169">U VERACRUZANA</OPTION>
                        <option value="170">UA AGUASCALIENTES</OPTION>
                        <option value="171">UA BAJA CALIFORNIA</OPTION>
                        <option value="172">UA BAJA CALIFORNIA SUR</OPTION>
                        <option value="173">UA BENITO JUAREZ OAXACA</OPTION>
                        <option value="174">UA CAMPECHE</OPTION>
                        <option value="175">UA CHAPINGO</OPTION>
                        <option value="176">UA CHIAPAS</OPTION>
                        <option value="177">UA CHIHUAHUA</OPTION>
                        <option value="178">UA CIUDAD JUAREZ</OPTION>
                        <option value="179">UA CIUDAD MEXICO</OPTION>
                        <option value="180">UA COAHUILA</OPTION>
                        <option value="181">UA EDO HIDALGO</OPTION>
                        <option value="182">UA EDO MEXICO</OPTION>
                        <option value="183">UA EDO MORELOS</OPTION>
                        <option value="184">UA GUERRERO</OPTION>
                        <option value="185">UA HIDALGO</OPTION>
                        <option value="186">UA NAYARIT</OPTION>
                        <option value="187">UA NUEVO LEON</OPTION>
                        <option value="188">UA QUERETARO</OPTION>
                        <option value="189">UA SAN LUIS POTOSI</OPTION>
                        <option value="190">UA SINALOA</OPTION>
                        <option value="191">UA TAMAULIPAS</OPTION>
                        <option value="192">UA TLAXCALA</OPTION>
                        <option value="193">UA YUCATAN</OPTION>
                        <option value="194">UA ZACATECAS</OPTION>
                        <option value="195">UAM</OPTION>
                        <option value="196">UDLA</OPTION>
                        <option value="197">UIA</OPTION>
                        <option value="198">UIA-PUEBLA</OPTION>
                        <option value="199">UNAM</OPTION>
                        <option value="200">UNIDAD DE SERVICIOS DE PATOLOGIA CLINICA</OPTION>
                        <option value="201">UP CHIAPAS</OPTION>
                        <option value="202">UP PACHUCA</OPTION>
                        <option value="203">UPAEP</OPTION>
                        <option value="204">UPN</OPTION>
                        <option value="205">UT LA MIXTECA</OPTION>
                        <option value="206">VENUN INMOBILIARIA</OPTION>
                        <option value="207">VIZIC TECHNOLOGIES</OPTION>
                        <option value="208">XENPAL</OPTION>
                        <option value="209">ZOOLOGICO GUADALAJARA</OPTION>
                    </select>
                <br>
                <br>
                <label>Entidad</label>
                    <select name="selectEntidad" size="1">
                        <option value="No seleccionaste genero">--Seleccione--</option>
                        <option value="AGUASCALIENTES">AGUASCALIENTES</OPTION>
                        <option value="BAJA CALIFORNIA">BAJA CALIFORNIA</OPTION>
                        <option value="BAJA CALIFORNIA SUR">BAJA CALIFORNIA SUR</OPTION>
                        <option value="CAMPECHE">CAMPECHE</OPTION>
                        <option value="CHIAPAS">CHIAPAS</OPTION>
                        <option value="CHIHUAHUA">CHIHUAHUA</OPTION>
                        <option value="COAHUILA">COAHUILA</OPTION>
                        <option value="COLIMA">COLIMA</OPTION>
                        <option value="DISTRITO FEDERAL">DISTRITO FEDERAL</OPTION>
                        <option value="DURANGO">DURANGO</OPTION>
                        <option value="ESTADO DE MEXICO">ESTADO DE MEXICO</OPTION>
                        <option value="GUANAJUATO">GUANAJUATO</OPTION>
                        <option value="GUERRERO">GUERRERO</OPTION>
                        <option value="HIDALGO">HIDALGO</OPTION>
                        <option value="JALISCO">JALISCO</OPTION>
                        <option value="MICHOACAN">MICHOACAN</OPTION>
                        <option value="MORELOS">MORELOS</OPTION>
                        <option value="NAYARIT">NAYARIT</OPTION>
                        <option value="NUEVO LEON">NUEVO LEON</OPTION>
                        <option value="OAXACA">OAXACA</OPTION>
                        <option value="PUEBLA">PUEBLA</OPTION>
                        <option value="QUERETARO">QUERETARO</OPTION>
                        <option value="QUINTANA ROO">QUINTANA ROO</OPTION>
                        <option value="SAN LUIS POTOSI">SAN LUIS POTOSI</OPTION>
                        <option value="SINALOA">SINALOA</OPTION>
                        <option value="SONORA">SONORA</OPTION>
                        <option value="TABASCO">TABASCO</OPTION>
                        <option value="TAMAULIPAS">TAMAULIPAS</OPTION>
                        <option value="TLAXCALA">TLAXCALA</OPTION>
                        <option value="VERACRUZ">VERACRUZ</OPTION>
                        <option value="YUCATAN">YUCATAN</OPTION>
                        <option value="ZACATECAS">ZACATECAS</OPTION>
                    </select>
                <br>
                <br>
                    <button type="reset">Cancelar</button>
                    <input type="submit" value="Enviar">
                <br>
        </form>
    </section>

<br>

    <table border="1">
        <tr>
            <th>No.</th>
            <th>Nombre Becarios</th>
            <th>Telefono</th>
            <th>Genero</th>
            <th>Area</th>
            <th>Nivel</th>
            <th>Institutos</th>
            <th>Entidad</th>
            
        </tr>

    <?php
        include ("conexion/conexion.php");
        $consulta = "
        SELECT 
    becarios_cmh.idBecario,
    CONCAT(
    becarios_cmh.nombre, ' ',
    becarios_cmh.apellidop, ' ',
    becarios_cmh.apellidom) becario,
    becarios_cmh.telefono,
    genero_cmh.Genero,
    area_cmh.nombre,
    nivel_cmh.nombreNivel,
    instituto_cmh.nombre,
    entidadf_cmh.nombre
    
FROM 
    becarios_cmh
    INNER JOIN
    instituto_cmh
    ON
        becarios_cmh.idInstitucion = instituto_cmh.idInstituto
    INNER JOIN 
    entidadf_cmh
    ON
        instituto_cmh.idEntidad = entidadf_cmh.idEntidadF
    INNER JOIN
    area_cmh
    ON
        becarios_cmh.idArea = area_cmh.idArea
    INNER JOIN 
    nivel_cmh
    ON 
        becarios_cmh.idNivel = nivel_cmh.idNivel
    INNER JOIN
    genero_cmh
    ON
        becarios_cmh.idGenero = genero_cmh.idGenero
ORDER BY 
    becarios_cmh.idBecario ASC;";
        #Ejecutar la consulta
        $becarios = mysqli_query($conexion,$consulta);
        #Extraer los datos del objeto de la consulta 
        while($regArea = mysqli_fetch_array($becarios)){
            echo "<tr>" .
                "<td>" . $regArea[0] . "</td>" .
                "<td>" . $regArea[1] . "</td>" . 
                "<td>" . $regArea[2] . "</td>" .
                "<td>" . $regArea[3] . "</td>" .
                "<td>" . $regArea[4] . "</td>" .
                "<td>" . $regArea[5] . "</td>" .
                "<td>" . $regArea[6] . "</td>" .
                "<td>" . $regArea[7] . "</td>" .
                "</tr>";
        }
    ?>

    </table>
</body>
</html>
<!--
SELECT 
	becarios_cmh.idBecario,
	CONCAT(
	becarios_cmh.nombre, '',
    becarios_cmh.apellidop, '',
    becarios_cmh.apellidom) becario,
    becarios_cmh.telefono,
    genero_cmh.Genero,
    area_cmh.nombre,
    instituto_cmh.nombre,
    entidadf_cmh.nombre
FROM 
	becarios_cmh
	INNER JOIN
    instituto_cmh
    ON
     	becarios_cmh.idInstitucion = instituto_cmh.idInstituto
     INNER JOIN 
     entidadf_cmh
     ON
     	instituto_cmh.idEntidad = entidadf_cmh.idEntidadF
     INNER JOIN
     area_cmh
     ON
     	becarios_cmh.idArea = area_cmh.idArea
     INNER JOIN 
     nivel_cmh
     ON 
     	becarios_cmh.idNivel = nivel_cmh.idNivel
     INNER JOIN
     genero_cmh
     ON
     	becarios_cmh.idGenero = genero_cmh.idGenero
 ORDER BY 
     becarios_cmh.idBecario ASC

    -->

    <!--
        Tarea: Hacer que agregues un formulario un registro n
    -->
