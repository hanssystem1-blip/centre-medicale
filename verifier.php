<?php
session_start();
if($_SERVER['REQUEST_METHOD']==='POST'){
    $otp=$_POST['otp'];
    //verifier le code
    if($otp==$_SESSION['otp']){
        echo "authentification reussie";
        session_destroy();
    }else{
        echo "echec de la verification ou code otp incorrect"
    }
}
?>