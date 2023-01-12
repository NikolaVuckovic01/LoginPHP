<?php
session_start();
require_once("funkcije.php");
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
    <h1>Stranica 1</h1>
    <?php
    echo "Prijavljeni ste kao: ".$_SESSION['user']." (".$_SESSION['status'].")";
    echo "<br><br><a href='login.php?odjava'>Odjavite se</a>";
    ?>
</body>
</html>