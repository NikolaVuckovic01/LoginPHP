<?php
    require_once("funkcije.php");
    session_start();
    if(!prijava()){
        header("Location: login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Stranica 2</h1>
    <?php
    if($_SESSION['status']=="Administrator"){
        echo "Administratorska stranica";
    }
    else
        echo "Nemate prvo pristupa";
    
    ?>
</body>
</html>