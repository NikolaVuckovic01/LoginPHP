<?php

function odjava(){
    session_unset();
    session_destroy();
    setcookie("user","",time()-1,"/");
    setcookie("status","",time()-1,"/");
}

function prijava(){
    if(isset($_SESSION['user']) and isset($_SESSION['status'])){
        return true;
    }
    else{
        if(isset($_COOKIE['user']) and isset($_COOKIE['status'])){
            $_SESSION['user']=$_COOKIE['user'];
            $_SESSION['status']=$_COOKIE['status'];
            return true;
        }
        else
            return false;
    }

        
}
?>