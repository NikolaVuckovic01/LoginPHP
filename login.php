<?php 
require_once('funkcije.php');
session_start();
if(isset($_GET['odjava'])){
    odjava();
    header("Location: login.php");
}
if(prijava())
    header("Location: stranica1.php");
/*
if(prijava()){
    header("Location: stranica1.php");
}
*/
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
    <h1>Login in</h1>
    <form action="login.php" method="post">
         <input type="text" name="korime" placeholder="Unesite korisnicko ime"><br><br>
         <input type="password" name="lozinka" placeholder="Unesite lozinku"><br><br>
         <input type="checkbox" name="zapamti">Zapamti me<br><br>
         <button name="posalji">Posalji</button><br><br>
    </form>
    <hr>
    <?php
    if(isset($_POST['posalji'])){
        $korIme=$_POST['korime'];
        $lozinka=$_POST['lozinka'];
        if(strlen($korIme)!=0 && strlen($lozinka)!=0){
            if($korIme=="admin" and $lozinka=="admin"){
                $_SESSION['user']="Nikola Vuckovic";
                $_SESSION['status']="Administrator";
                if(isset($_POST['zapamti'])){
                    setcookie("user",$korIme,time()+86400,"/");
                    setcookie("status","Administrator",time()+86400,"/");
                }
                header("Location: stranica1.php");
            }
            else
                echo "Neispravni podaci";
        }
        else
            echo "Morate uneti podatke";
    }
    else
        echo "Dobro dosli, molimo prijavite se!";
    ?>
</body>
</html>