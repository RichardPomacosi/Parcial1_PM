<?php
    require 'database.php';
    $user =null;
    $r=$conn->prepare('SELECT identificador.residencia, inscrito.nota
from identificador, inscrito, materia
where identificador.ci=inscrito.ci
and inscrito.codmat=materia.codmat');

        //$r=$conn->prepare('SELECT ci, nombre, paterno FROM identificador' );
        $r->execute();
        $d01=0;//Chiquisaca
        $d02=0;//La Paz
        $d03=0;//Cochabamba
        $d04=0;//Oruro
        $d05=0;//Potosi
        $d06=0;//Tarija
        $d07=0;//Santa Cruz
        $d08=0;//Beni
        $d09=0;//Pando
        $d10=0;//Otro
        
       while($resultado=$r->fetch(PDO::FETCH_ASSOC)){
           switch($resultado['residencia']){
               case '01':
                   if($resultado['nota']>50){
                       $d01=$d01+1;
                   }
                   break;
                case '02':
                if($resultado['nota']>50){
                    $d02=$d02+1;
                }
                break;
                case '03':
                    if($resultado['nota']>50){
                        $d03=$d03+1;
                    }
                    break;
                case '04':
                    if($resultado['nota']>50){
                        $d04=$d04+1;
                    }
                    break;
                case '05':
                    if($resultado['nota']>50){
                        $d05=$d05+1;
                    }
                    break;
                case '06':
                    if($resultado['nota']>50){
                        $d06=$d06+1;
                    }
                    break;
                case '07':
                    if($resultado['nota']>50){
                        $d07=$d07+1;
                    }
                    break;
                case '08':
                    if($resultado['nota']>50){
                        $d08=$d08+1;
                    }
                    break;
                case '09':
                    if($resultado['nota']>50){
                        $d09=$d09+1;
                    }
                    break;
                case '10':
                    if($resultado['nota']>50){
                        $d10=$d10+1;
                    }
                    break;                       
           }
           
       }
    
     echo "Realice lo mismo del punto (b) pero con PHP.";
       echo "<table border=1>";
        echo "<tr>";
            echo "<td> Chuquisaca </td>";
            echo "<td> La Paz </td>";
            echo "<td> Cochabamba </td>";
            echo "<td> Oruro </td>";
            echo "<td> Potosi </td>";
            echo "<td> Tarija </td>";
            echo "<td> Santa Cruz </td>";
            echo "<td> Beni </td>";
            echo "<td> Pando </td>";
            echo "<td> Otro </td>";
       echo "</tr>";
       echo "<tr>";
            echo "<td>".$d01."</td>";
            echo "<td>".$d02."</td>";
            echo "<td>".$d03."</td>";
            echo "<td>".$d04."</td>";
            echo "<td>".$d05."</td>";
            echo "<td>".$d06."</td>";
            echo "<td>".$d07."</td>";
            echo "<td>".$d08."</td>";
            echo "<td>".$d09."</td>";
            echo "<td>".$d10."</td>";
        echo "</tr>";
        echo "</table>"
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>