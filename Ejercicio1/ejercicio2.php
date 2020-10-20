<?php
    require 'database.php';
    $user =null;
    if(isset($_SESSION['user_id'])){
        $r=$conn->prepare('SELECT ci, nombre, paterno FROM identificador where ci=:carnet' );
        $r->bindParam(':carnet',$_SESSION['user_id']);
        $r->execute();

        $resultado=$r->fetch(PDO::FETCH_ASSOC);
       
        if(count($resultado)>0){
            $user=$resultado;

        }
    }
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