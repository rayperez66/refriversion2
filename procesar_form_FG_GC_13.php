<?php
//include("conexion.php");

// Datos de conexión a la base de datos
$serverName = "52.247.114.74"; // Nombre del servidor
$connectionOptions = array(
    "Database" => "DBE_INTERVENTORIA_PAE", // Nombre de la base de datos
    "Uid" => "interventoria1.pae", // Nombre de usuario
    "PWD" => "Chg1c4g02022>" // Contraseña

);

// Intenta establecer la conexión
$conn = sqlsrv_connect($serverName, $connectionOptions);
if ($conn === false) {
    echo "Error al conectar a la base de datos: " . print_r(sqlsrv_errors(), true);
    exit();
} else {
    echo "<p style='color: green;'>Conexión establecida correctamente</p>";
}    

// Intentar guardar en la base de datos

//$Correo = $_POST["Correo"];
$E1 = $_POST["E1"];
$ID = $_POST["ID"];
$E2 = $_POST["E2"];
$E3 = $_POST["E3"];
$E4 = $_POST["E4"];
$TE1 = $_POST["TE1"];
$E5 = $_POST["E5"];
$EJ5 = $_POST["EJ5"];
$E6 = $_POST["E6"];
$E7 = $_POST["E7"];
$E8 = $_POST["E8"];
$E9 = $_POST["E9"];
$E10 = $_POST["E10"];
$A1 = $_POST["A1"];
$OBA1 = $_POST["OBA1"];
$A2 = $_POST["A2"];
$A3 = $_POST["A3"];
$A4 = $_POST["A4"];
$A5 = $_POST["A5"];
$A6 = $_POST["A6"];
$A7 = $_POST["A7"];
$A8 = $_POST["A8"];
$OBA8 = $_POST["OBA8"];
$A9 = $_POST["A9"];
$A10 = $_POST["A10"];
$A11 = $_POST["A11"];
$P1 = $_POST["P1"];
$OB1 = $_POST["OB1"];
$P2 = $_POST["P2"];
$OB2 = $_POST["OB2"];
$P3 = $_POST["P3"];
$OB3 = $_POST["OB3"];
$P4 = $_POST["P4"];
$OB4 = $_POST["OB4"];
$P5 = $_POST["P5"];
$OB5 = $_POST["OB5"];
$P6 = $_POST["P6"];
$OB6 = $_POST["OB6"];
$P7 = $_POST["P7"];
$OB7 = $_POST["OB7"];
$P8 = $_POST["P8"];
$OB8 = $_POST["OB8"];
$P9 = $_POST["P9"];
$OB9 = $_POST["OB9"];
$P10 = $_POST["P10"];
$OB10 = $_POST["OB10"];
$P11 = $_POST["P11"];
$OB11 = $_POST["OB11"];
$P12 = $_POST["P12"];
$OB12 = $_POST["OB12"];
$P13 = $_POST["P13"];
$OB13 = $_POST["OB13"];
$P14 = $_POST["P14"];
$OB14 = $_POST["OB14"];
$P15 = $_POST["P15"];
$OB15 = $_POST["OB15"];
$P16 = $_POST["P16"];
$OB16 = $_POST["OB16"];
$P17 = $_POST["P17"];
$OB17 = $_POST["OB17"];
$P18 = $_POST["P18"];
$OB18 = $_POST["OB18"];
$P19 = $_POST["P19"];
$OB19 = $_POST["OB19"];
$P20 = $_POST["P20"];
$OB20 = $_POST["OB20"];
$P21 = $_POST["P21"];
$OB21 = $_POST["OB21"];
$P22 = $_POST["P22"];
$OB22 = $_POST["OB22"];
$P23 = $_POST["P23"];
$OB23 = $_POST["OB23"];
$P24 = $_POST["P24"];
$OB24 = $_POST["OB24"];
$P25 = $_POST["P25"];
$OB25 = $_POST["OB25"];
$P26 = $_POST["P26"];
$OB26 = $_POST["OB26"];
$P27 = $_POST["P27"];
$FVLT = $_POST["FVLT"];
$OB27 = $_POST["OB27"];
$P28 = $_POST["P28"];
$OB28 = $_POST["OB28"];
$FVFP = $_POST["FVFP"];
$P29 = $_POST["P29"];
$OB29 = $_POST["OB29"];
$P30 = $_POST["P30"];
$OB30 = $_POST["OB30"];
$P31 = $_POST["P31"];
$OB31 = $_POST["OB31"];
$TC = $_POST["TC"];
$POB = $_POST["POB"];
$PDC = $_POST["PDC"];
$IAI = $_POST["IAI"];
$REC = $_POST["REC"];
$COMSE = $_POST["COMSE"];
$SEGOBS = $_POST["SEGOBS"];
$S1 = $_POST["S1"];
$S1_1 = $_POST["S1_1"];
$S1_2 = $_POST["S1_2"];
$S1_3 = $_POST["S1_3"];
$S2 = $_POST["S2"];
$S2_1 = $_POST["S2_1"];
$S2_2 = $_POST["S2_2"];
$S2_3 = $_POST["S2_3"];
$S3 = $_POST["S3"];
$S3_1 = $_POST["S3_1"];
$S3_2 = $_POST["S3_2"];
$S3_3 = $_POST["S3_3"];
$S4 = $_POST["S4"];
$S4_1 = $_POST["S4_1"];
$S4_2 = $_POST["S4_2"];
$S4_3 = $_POST["S4_3"];
$S5 = $_POST["S5"];
$S5_1 = $_POST["S5_1"];
$S5_2 = $_POST["S5_2"];
$S5_3 = $_POST["S5_3"];
$S6 = $_POST["S6"];
$S6_1 = $_POST["S6_1"];
$S6_2 = $_POST["S6_2"];
$S6_3 = $_POST["S6_3"];
$S7 = $_POST["S7"];
$S7_1 = $_POST["S7_1"];
$S7_2 = $_POST["S7_2"];
$S7_3 = $_POST["S7_3"];
$S8 = $_POST["S8"];
$S8_1 = $_POST["S8_1"];
$S8_2 = $_POST["S8_2"];
$S8_3 = $_POST["S8_3"];
$S9 = $_POST["S9"];
$S9_1 = $_POST["S9_1"];
$S9_2 = $_POST["S9_2"];
$S9_3 = $_POST["S9_3"];
$S10 = $_POST["S10"];
$S10_1 = $_POST["S10_1"];
$S10_2 = $_POST["S10_2"];
$S10_3 = $_POST["S10_3"];
$S11 = $_POST["S11"];
$S11_1 = $_POST["S11_1"];
$S11_2 = $_POST["S11_2"];
$S11_3 = $_POST["S11_3"];
$S12 = $_POST["S12"];
$S12_1 = $_POST["S12_1"];
$S12_2 = $_POST["S12_2"];
$S12_3 = $_POST["S12_3"];
$S13 = $_POST["S13"];
$S13_1 = $_POST["S13_1"];
$S13_2 = $_POST["S13_2"];
$S13_3 = $_POST["S13_3"];
$S14 = $_POST["S14"];
$S14_1 = $_POST["S14_1"];
$S14_2 = $_POST["S14_2"];
$S14_3 = $_POST["S14_3"];
$S15 = $_POST["S15"];
$S15_1 = $_POST["S15_1"];
$S15_2 = $_POST["S15_2"];
$S15_3 = $_POST["S15_3"];
$S16 = $_POST["S16"];
$S16_1 = $_POST["S16_1"];
$S16_2 = $_POST["S16_2"];
$S16_3 = $_POST["S16_3"];
$S17 = $_POST["S17"];
$S17_1 = $_POST["S17_1"];
$S17_2 = $_POST["S17_2"];
$S17_3 = $_POST["S17_3"];
$S18 = $_POST["S18"];
$S18_1 = $_POST["S18_1"];
$S18_2 = $_POST["S18_2"];
$S18_3 = $_POST["S18_3"];
$S19 = $_POST["S19"];
$S19_1 = $_POST["S19_1"];
$S19_2 = $_POST["S19_2"];
$S19_3 = $_POST["S19_3"];
$S20 = $_POST["S20"];
$S20_1 = $_POST["S20_1"];
$S20_2 = $_POST["S20_2"];
$S20_3 = $_POST["S20_3"];
$S21 = $_POST["S21"];
$S21_1 = $_POST["S21_1"];
$S21_2 = $_POST["S21_2"];
$S21_3 = $_POST["S21_3"];
$S22 = $_POST["S22"];
$S22_1 = $_POST["S22_1"];
$S22_2 = $_POST["S22_2"];
$S22_3 = $_POST["S22_3"];
$S23 = $_POST["S23"];
$S23_1 = $_POST["S23_1"];
$S23_2 = $_POST["S23_2"];
$S23_3 = $_POST["S23_3"];
$S24 = $_POST["S24"];
$S24_1 = $_POST["S24_1"];
$S24_2 = $_POST["S24_2"];
$S24_3 = $_POST["S24_3"];
$S25 = $_POST["S25"];
$S25_1 = $_POST["S25_1"];
$S25_2 = $_POST["S25_2"];
$S25_3 = $_POST["S25_3"];
$NRSE = $_POST["NRSE"];
$DRSE = $_POST["DRSE"];
$CNCRSE = $_POST["CNCRSE"];
$NRI = $_POST["NRI"];
$DRI = $_POST["DRI"];
$CNCRI = $_POST["CNCRI"];
$HF = $_POST["HF"];
$Correo_electrónico = $_POST["Correo_electrónico"];

// Definimos lista de respuestas
$Respuestas = array($P1,$P2,$P3,$P4,$P5,$P6,$P7,$P8,$P9,$P10,$P11,$P12,
$P13,$P14,$P15,$P16,$P17,$P18,$P19,$P20,$P21,$P22,$P23,$P24,$P25,$P26,
$P27,$P28,$P29,$P30,$P31);


// Inicializamos contadores en 0
$contadorC = 0;
$contadorNC = 0;
$contadorNA = 0;

// Iteramos sobre la lista de RESPUESTAS
foreach ($Respuestas as $respuesta) {
    // Validamos las respuestas
    if ($respuesta == "C") {
        // Incrementamos el contador si la respuesta es 'C"
        $contadorC++;
    }
    if ($respuesta == "NC") {
        // Incrementamos el contador si la respuesta es 'NC"
        $contadorNC++;
    }
    if ($respuesta == "NA") {
        // Incrementamos el contador si la respuesta es 'NA"
        $contadorNA++;
    }
}

$TC = $contadorC;
$POB = ($contadorC/($contadorC+$contadorNC));
$porcentaje = number_format($POB*100,2). "%";

if ($POB >= 0.95) {
    $PDC = "Muy bueno 95% - 100%";
}
if ($POB >= 0.85 && $POB <= 0.949) {
    $PDC = "Bueno 85% - 94.9%";
}
if ($POB >= 0.70 && $POB <= 0.849) {
    $PDC = "Aceptable 70% - 84.9%";
}
if ($POB <= 0.69) {
    $PDC = "Deficiente menor que 69%";
}


// Imprimimos un mensaje con el conteo
echo "<p style='font-size: 20px; color: blue;'><strong>Total calificación (Cumple) : $contadorC </strong></p>";
echo "<p style='font-size: 20px; color: blue;'><strong>Cantidad de No Cumple : $contadorNC</strong></p>";
echo "<p style='font-size: 20px; color: blue;'><strong>Cantidad de No Aplica : $contadorNA</strong></p>";
echo "<p style='font-size: 20px; color: red;'><strong>Porcentaje obtenido : $porcentaje</strong></p>";
echo "<p style='font-size: 20px; color: red;'><strong>Porcentaje de cumplimiento : $PDC</strong></p>";

// $sql="INSERT INTO Db_FGC_13_new VALUES ('$Correo','$E1','$ID','$E2','$E3','$E4','$TE1','$E5','$EJ5','$E6','$E7','$E8','$E9','$E10','$A1','$OBA1','$A2','$A3','$A4','$A5','$A6','$A7','$A8','$OBA8','$A9','$A10','$A11','$P1','$OB1','$P2','$OB2','$P3','$OB3','$P4','$OB4','$P5','$OB5','$P6','$OB6','$P7','$OB7','$P8','$OB8','$P9','$OB9','$P10','$OB10','$P11','$OB11','$P12','$OB12','$P13','$OB13','$P14','$OB14','$P15','$OB15','$P16','$OB16','$P17','$OB17','$P18','$OB18','$P19','$OB19','$P20','$OB20','$P21','$OB21','$P22','$OB22','$P23','$OB23','$P24','$OB24','$P25','$OB25','$P26','$OB26','$P27','$OB27','$P28','$OB28','$P29','$OB29','$P30','$OB30','$P31','$OB31','$TC','$POB','$PDC','$IAI','$REC','$COMSE','$SEGOBS','$S1','$S1_1','$S1_2','$S1_3','$S2','$S2_1','$S2_2','$S2_3','$S3','$S3_1','$S3_2','$S3_3','$S4','$S4_1','$S4_2','$S4_3','$S5','$S5_1','$S5_2','$S5_3','$S6','$S6_1','$S6_2','$S6_3','$S7','$S7_1','$S7_2','$S7_3','$S8','$S8_1','$S8_2','$S8_3','$S9','$S9_1','$S9_2','$S9_3','$S10','$S10_1','$S10_2','$S10_3','$S11','$S11_1','$S11_2','$S11_3','$S12','$S12_1','$S12_2','$S12_3','$S13','$S13_1','$S13_2','$S13_3','$S14','$S14_1','$S14_2','$S14_3','$S15','$S15_1','$S15_2','$S16','$S15_3','$S16_1','$S16_2','$S16_3','$S17','$S17_1','$S17_2','$S17_3','$S18','$S18_1','$S18_2','$S18_3','$S19','$S19_1','$S19_2','$S19_3','$S20','$S20_1','$S20_2','$S20_3','$S21','$S21_1','$S21_2','$S21_3','$S22','$S22_1','$S22_2','$S22_3','$S23','$S23_1','$S23_2','$S23_3','$S24','$S24_1','$S24_2','$S24_3','$S25','$S25_1','$S25_2','$S25_3','$NRSE','$DRSE','$CNCRSE','$NRI','$DRI','$CNCRI','$HF','$Correo_electrónico')";
$sql="INSERT INTO Db_FGC_13_new VALUES ('$E1','$ID','$E2','$E3','$E4','$TE1','$E5','$EJ5','$E6','$E7','$E8','$E9','$E10','$A1','$OBA1','$A2','$A3','$A4','$A5','$A6','$A7','$A8','$OBA8','$A9','$A10','$A11','$P1','$OB1','$P2','$OB2','$P3','$OB3','$P4','$OB4','$P5','$OB5','$P6','$OB6','$P7','$OB7','$P8','$OB8','$P9','$OB9','$P10','$OB10','$P11','$OB11','$P12','$OB12','$P13','$OB13','$P14','$OB14','$P15','$OB15','$P16','$OB16','$P17','$OB17','$P18','$OB18','$P19','$OB19','$P20','$OB20','$P21','$OB21','$P22','$OB22','$P23','$OB23','$P24','$OB24','$P25','$OB25','$P26','$OB26','$P27','$FVLT','$OB27','$P28','$FVFP','$OB28','$P29','$OB29','$P30','$OB30','$P31','$OB31','$TC','$POB','$PDC','$IAI','$REC','$COMSE','$SEGOBS','$S1','$S1_1','$S1_2','$S1_3','$S2','$S2_1','$S2_2','$S2_3','$S3','$S3_1','$S3_2','$S3_3','$S4','$S4_1','$S4_2','$S4_3','$S5','$S5_1','$S5_2','$S5_3','$S6','$S6_1','$S6_2','$S6_3','$S7','$S7_1','$S7_2','$S7_3','$S8','$S8_1','$S8_2','$S8_3','$S9','$S9_1','$S9_2','$S9_3','$S10','$S10_1','$S10_2','$S10_3','$S11','$S11_1','$S11_2','$S11_3','$S12','$S12_1','$S12_2','$S12_3','$S13','$S13_1','$S13_2','$S13_3','$S14','$S14_1','$S14_2','$S14_3','$S15','$S15_1','$S15_2','$S16','$S15_3','$S16_1','$S16_2','$S16_3','$S17','$S17_1','$S17_2','$S17_3','$S18','$S18_1','$S18_2','$S18_3','$S19','$S19_1','$S19_2','$S19_3','$S20','$S20_1','$S20_2','$S20_3','$S21','$S21_1','$S21_2','$S21_3','$S22','$S22_1','$S22_2','$S22_3','$S23','$S23_1','$S23_2','$S23_3','$S24','$S24_1','$S24_2','$S24_3','$S25','$S25_1','$S25_2','$S25_3','$NRSE','$DRSE','$CNCRSE','$NRI','$DRI','$CNCRI','$HF','$Correo_electrónico')";



$res = sqlsrv_prepare($conn, $sql);

// Intentar ejecutar la consulta
//$stmt = sqlsrv_query($conn, $sql, $params);
//$stmt = sqlsrv_query($conn, $sql);

if (sqlsrv_execute($res)) {
    //echo "Datos insertados correctamente " ;
    $mensaje = "Datos ingresados correctamente";
   
    $mostrarAviso = true; 
    if ($mostrarAviso): ?>
        <p style='color: green;'><?= $mensaje ?></p>
    <?php endif;

} else {
    echo "Error al insertar.";
    echo ";" ;	 echo $Correo; 
    echo ";" ;	 echo $E1; 
    echo ";" ;	 echo $ID; 
    echo ";" ;	 echo $E2; 
    echo ";" ;	 echo $E3; 
    echo ";" ;	 echo $E4; 
    echo ";" ;	 echo $TE1; 
    echo ";" ;	 echo $E5; 
    echo ";" ;	 echo $EJ5; 
    echo ";" ;	 echo $E6; 
    echo ";" ;	 echo $E7; 
    echo ";" ;	 echo $E8; 
    echo ";" ;	 echo $E9; 
    echo ";" ;	 echo $E10; 
    echo ";" ;	 echo $A1; 
    echo ";" ;	 echo $OBA1; 
    echo ";" ;	 echo $A2; 
    echo ";" ;	 echo $A3; 
    echo ";" ;	 echo $A4; 
    echo ";" ;	 echo $A5; 
    echo ";" ;	 echo $A6; 
    echo ";" ;	 echo $A7; 
    echo ";" ;	 echo $A8; 
    echo ";" ;	 echo $OBA8; 
    echo ";" ;	 echo $A9; 
    echo ";" ;	 echo $A10; 
    echo ";" ;	 echo $A11; 
    echo ";" ;	 echo $P1; 
    echo ";" ;	 echo $OB1; 
    echo ";" ;	 echo $P2; 
    echo ";" ;	 echo $OB2; 
    echo ";" ;	 echo $P3; 
    echo ";" ;	 echo $OB3; 
    echo ";" ;	 echo $P4; 
    echo ";" ;	 echo $OB4; 
    echo ";" ;	 echo $P5; 
    echo ";" ;	 echo $OB5; 
    echo ";" ;	 echo $P6; 
    echo ";" ;	 echo $OB6; 
    echo ";" ;	 echo $P7; 
    echo ";" ;	 echo $OB7; 
    echo ";" ;	 echo $P8; 
    echo ";" ;	 echo $OB8; 
    echo ";" ;	 echo $P9; 
    echo ";" ;	 echo $OB9; 
    echo ";" ;	 echo $P10; 
    echo ";" ;	 echo $OB10; 
    echo ";" ;	 echo $P11; 
    echo ";" ;	 echo $OB11; 
    echo ";" ;	 echo $P12; 
    echo ";" ;	 echo $OB12; 
    echo ";" ;	 echo $P13; 
    echo ";" ;	 echo $OB13; 
    echo ";" ;	 echo $P14; 
    echo ";" ;	 echo $OB14; 
    echo ";" ;	 echo $P15; 
    echo ";" ;	 echo $OB15; 
    echo ";" ;	 echo $P16; 
    echo ";" ;	 echo $OB16; 
    echo ";" ;	 echo $P17; 
    echo ";" ;	 echo $OB17; 
    echo ";" ;	 echo $P18; 
    echo ";" ;	 echo $OB18; 
    echo ";" ;	 echo $P19; 
    echo ";" ;	 echo $OB19; 
    echo ";" ;	 echo $P20; 
    echo ";" ;	 echo $OB20; 
    echo ";" ;	 echo $P21; 
    echo ";" ;	 echo $OB21; 
    echo ";" ;	 echo $P22; 
    echo ";" ;	 echo $OB22; 
    echo ";" ;	 echo $P23; 
    echo ";" ;	 echo $OB23; 
    echo ";" ;	 echo $P24; 
    echo ";" ;	 echo $OB24; 
    echo ";" ;	 echo $P25; 
    echo ";" ;	 echo $OB25; 
    echo ";" ;	 echo $P26; 
    echo ";" ;	 echo $OB26; 
    echo ";" ;	 echo $P27; 
    echo ";" ;	 echo $OB27; 
    echo ";" ;	 echo $P28; 
    echo ";" ;	 echo $OB28; 
    echo ";" ;	 echo $P29; 
    echo ";" ;	 echo $OB29; 
    echo ";" ;	 echo $P30; 
    echo ";" ;	 echo $OB30; 
    echo ";" ;	 echo $P31; 
    echo ";" ;	 echo $OB31; 
    echo ";" ;	 echo $TC; 
    echo ";" ;	 echo $POB; 
    echo ";" ;	 echo $PDC; 
    echo ";" ;	 echo $IAI; 
    echo ";" ;	 echo $REC; 
    echo ";" ;	 echo $COMSE; 
    echo ";" ;	 echo $SEGOBS; 
    echo ";" ;	 echo $S1; 
    echo ";" ;	 echo $S1_1; 
    echo ";" ;	 echo $S1_2; 
    echo ";" ;	 echo $S1_3; 
    echo ";" ;	 echo $S2; 
    echo ";" ;	 echo $S2_1; 
    echo ";" ;	 echo $S2_2; 
    echo ";" ;	 echo $S2_3; 
    echo ";" ;	 echo $S3; 
    echo ";" ;	 echo $S3_1; 
    echo ";" ;	 echo $S3_2; 
    echo ";" ;	 echo $S3_3; 
    echo ";" ;	 echo $S4; 
    echo ";" ;	 echo $S4_1; 
    echo ";" ;	 echo $S4_2; 
    echo ";" ;	 echo $S4_3; 
    echo ";" ;	 echo $S5; 
    echo ";" ;	 echo $S5_1; 
    echo ";" ;	 echo $S5_2; 
    echo ";" ;	 echo $S5_3; 
    echo ";" ;	 echo $S6; 
    echo ";" ;	 echo $S6_1; 
    echo ";" ;	 echo $S6_2; 
    echo ";" ;	 echo $S6_3; 
    echo ";" ;	 echo $S7; 
    echo ";" ;	 echo $S7_1; 
    echo ";" ;	 echo $S7_2; 
    echo ";" ;	 echo $S7_3; 
    echo ";" ;	 echo $S8; 
    echo ";" ;	 echo $S8_1; 
    echo ";" ;	 echo $S8_2; 
    echo ";" ;	 echo $S8_3; 
    echo ";" ;	 echo $S9; 
    echo ";" ;	 echo $S9_1; 
    echo ";" ;	 echo $S9_2; 
    echo ";" ;	 echo $S9_3; 
    echo ";" ;	 echo $S10; 
    echo ";" ;	 echo $S10_1; 
    echo ";" ;	 echo $S10_2; 
    echo ";" ;	 echo $S10_3; 
    echo ";" ;	 echo $S11; 
    echo ";" ;	 echo $S11_1; 
    echo ";" ;	 echo $S11_2; 
    echo ";" ;	 echo $S11_3; 
    echo ";" ;	 echo $S12; 
    echo ";" ;	 echo $S12_1; 
    echo ";" ;	 echo $S12_2; 
    echo ";" ;	 echo $S12_3; 
    echo ";" ;	 echo $S13; 
    echo ";" ;	 echo $S13_1; 
    echo ";" ;	 echo $S13_2; 
    echo ";" ;	 echo $S13_3; 
    echo ";" ;	 echo $S14; 
    echo ";" ;	 echo $S14_1; 
    echo ";" ;	 echo $S14_2; 
    echo ";" ;	 echo $S14_3; 
    echo ";" ;	 echo $S15; 
    echo ";" ;	 echo $S15_1; 
    echo ";" ;	 echo $S15_2; 
    echo ";" ;	 echo $S16; 
    echo ";" ;	 echo $S15_3; 
    echo ";" ;	 echo $S16_1; 
    echo ";" ;	 echo $S16_2; 
    echo ";" ;	 echo $S16_3; 
    echo ";" ;	 echo $S17; 
    echo ";" ;	 echo $S17_1; 
    echo ";" ;	 echo $S17_2; 
    echo ";" ;	 echo $S17_3; 
    echo ";" ;	 echo $S18; 
    echo ";" ;	 echo $S18_1; 
    echo ";" ;	 echo $S18_2; 
    echo ";" ;	 echo $S18_3; 
    echo ";" ;	 echo $S19; 
    echo ";" ;	 echo $S19_1; 
    echo ";" ;	 echo $S19_2; 
    echo ";" ;	 echo $S19_3; 
    echo ";" ;	 echo $S20; 
    echo ";" ;	 echo $S20_1; 
    echo ";" ;	 echo $S20_2; 
    echo ";" ;	 echo $S20_3; 
    echo ";" ;	 echo $S21; 
    echo ";" ;	 echo $S21_1; 
    echo ";" ;	 echo $S21_2; 
    echo ";" ;	 echo $S21_3; 
    echo ";" ;	 echo $S22; 
    echo ";" ;	 echo $S22_1; 
    echo ";" ;	 echo $S22_2; 
    echo ";" ;	 echo $S22_3; 
    echo ";" ;	 echo $S23; 
    echo ";" ;	 echo $S23_1; 
    echo ";" ;	 echo $S23_2; 
    echo ";" ;	 echo $S23_3; 
    echo ";" ;	 echo $S24; 
    echo ";" ;	 echo $S24_1; 
    echo ";" ;	 echo $S24_2; 
    echo ";" ;	 echo $S24_3; 
    echo ";" ;	 echo $S25; 
    echo ";" ;	 echo $S25_1; 
    echo ";" ;	 echo $S25_2; 
    echo ";" ;	 echo $S25_3; 
    echo ";" ;	 echo $NRSE; 
    echo ";" ;	 echo $DRSE; 
    echo ";" ;	 echo $CNCRSE; 
    echo ";" ;	 echo $NRI; 
    echo ";" ;	 echo $DRI; 
    echo ";" ;	 echo $CNCRI; 
    echo ";" ;	 echo $HF; 
    echo ";" ;	 echo $Correo_electrónico; 
    

}
// AQUI DEBERA IR EL SCRIPT DE COMBINACION CON ELA PLANTILLA CORRESPONDECIA 
//Y LA GENRACIÓN DEL PDF, ASI COMO EL ENVIO A UNA CORREO 

	
// Cerrar la conexión
sqlsrv_close($conn);
?>