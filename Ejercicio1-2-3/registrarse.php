<?php
    require 'database.php';
    $message='';
    if(!empty($_POST['ci'])&&!empty($_POST['nombre'])&&!empty($_POST['paterno'])&&!empty($_POST['materno'])&&!empty($_POST['residencia'])&&!empty($_POST['password'])){
        $sql="INSERT INTO identificador (ci,nombre,paterno, materno, residencia) values  (:ci,:nombre,:paterno,:materno,:residencia)";
        $st=$conn->prepare($sql);
        $st->bindParam(':ci',$_POST['ci']);
        $st->bindParam(':nombre',$_POST['nombre']);
        $st->bindParam(':paterno',$_POST['paterno']);
        $st->bindParam(':materno',$_POST['materno']);
        $st->bindParam(':residencia',$_POST['residencia']);
        //creando el usuario
        $st->execute();
        if($st->execute()){
            $message='Se registro un campo';
        }else{
            $message='Se produjo un error al registrar';
        }
        $sql="INSERT INTO usuario (ci,clave,color) values  (:ci, :password, :col)";
        $st=$conn->prepare($sql);
        //$password=password_hash($_POST['password'],PASSWORD_BCRYPT);
        $st->bindParam(':ci',$_POST['ci']);
        $st->bindParam(':password',$_POST['password']);
        $st->bindParam(':col',$_POST['color']);
      

        if($st->execute()){
            $message='Se registro un campo';
        }else{
            $message='Se produjo un error al registrar';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="assets/css/estilo.css">
</head>
<body>
    <?php require 'header.php'?>

    <?php if(!empty($message)): ?>
        <p><?=  $message?></p>
    <?php endif; ?>
    <h1> Registro</h1>
    <span><a href="login.php">Login </a></span>
    
    <form action="registrarse.php" method="post">
    <select name="color" class="select">
					<option disabled="">Selecciona un color</option>
					<option value="#c70039">Rojo</option>
					<option value="#ffc305">Amarillo</option>
                    <option value="#8b4513">Cafe</option>
                    <option value="#ff00ff">Lila</option>
		</select>
        <input type="text" name="ci" placeholder="Carnet de identidad">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="paterno" placeholder="Apellido Paterno">
        <input type="text" name="materno" placeholder="Apellido Materno">
        <input type="text" name="residencia" placeholder="Residencia">
        <input type="password" name="password" placeholder="Contraseña">
        
        <input type="submit" values="Registrar">

    </form>
</body>
</html>