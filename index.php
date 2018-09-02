<?php 
require("pdo.php");

$stm = $pdo->prepare("select * from dispositivo");
$stm->execute();
$result = $stm->fetchall(PDO::FETCH_OBJ);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <title></title>
 </head>
 <body>
 <table border="1" align="left">
     <thead>
         <tr>
             <th>ID</th>
             <th>IMEI</th>
             <th>TEMPERATURA</th>
             <th>PH</th>
             <th>LOCALIZACION</th>
             <th>FECHA</th>
         </tr>
     </thead>
     <tbody>
         <?php foreach ($result as $value) {  ?>
         <tr>
             <td><?php echo $value->id; ?></td>
             <td><?php echo $value->imei; ?></td>
             <td><?php echo $value->temperatura; ?></td>
             <td><?php echo $value->ph; ?></td>
             <td><?php echo $value->posicion; ?></td>
             <td><?php echo $value->fecha; ?></td>
         </tr>
         <?php } ?>
     </tbody>
 </table>
 </body>
 </html>