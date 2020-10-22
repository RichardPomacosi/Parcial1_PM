<?php
    session_start();
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
    <title>Bienvenido</title>
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/estilosesion.css">
    
</head>
<body>

<?php require 'header.php'?>
<header class="head" style="background-color: <?php echo $_SESSION['color']?> ">
    <div class="esti">
    <a href="/academico">Buen Dia </a>

    </div>
</header>

    <?php if(!empty($user)):?>
        <br>Bienvenido <?= $user['nombre'].' '.$user['paterno']?>
        <br>
        <a href="logout.php">Logout</a>
    <?php else: ?>

    <h1>Inicia sesion o registrate</h1>
    <a href="login.php">Login </a>or
    <a href="registrarse.php"> Registrarse </a>
    <?php endif;?>
</body>
</html>