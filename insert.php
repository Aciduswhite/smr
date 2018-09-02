<?php
require("pdo.php");
date_default_timezone_set('America/Mexico_City');

$imei = $_REQUEST['imei'];
$temperatura = $_REQUEST['t'];
$ph = $_REQUEST['ph'];
$geo = $_REQUEST['geo'];
$date = date("Y-m-d H:i:s");

    //Estructira de la DB
    //-id
    //-imei
    //-temperatura
    //-ph
    //-posicion
    //-fecha

$ins = $pdo->prepare('INSERT INTO dispositivo(imei,temperatura,ph,posicion,fecha) VALUES(?,?,?,?,?)');
$ins->execute(array($imei,$temperatura,$ph,$geo,$date));

?>
