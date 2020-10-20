<?php
session_start();
    require 'database.php';
    if (!empty($_POST['ci'])&&!empty($_POST['password'])) {
        $r= $conn->prepare('SELECT ci, clave from usuario where ci=:car');
        $r->bindParam(':car', $_POST['ci']);
        $r->execute();

        $resultado=$r->fetch(PDO::FETCH_ASSOC);
        $message='';

        if(count($resultado)>0 && $_POST['password']== $resultado['clave']){
           $_SESSION['user_id']=$resultado['ci'];
           
            header('location: /academico/sesion.php');
        }else{
            $message='Contraseña incorrecta';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/estilo.css">
</head>
<body>
<?php require 'header.php'?>

<h1>Login</h1>
<a href="registrarse.php">Registrarse </a>

<?php if(!empty($message)): ?>
        <p><?=  $message?></p>
    <?php endif; ?>


    <form action="login.php" method="POST">
        <input type="text" name="ci" placeholder="Carnet de identidad">
        <input type="password" name="password" placeholder="Contraseña">
        <input type="submit" values="Ingresar">
    </form>
</body>
</html>