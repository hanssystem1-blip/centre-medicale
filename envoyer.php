<?php
session_start();
require 'twilio-php-main\src\Twilio\autoload'; //pour l'api twillio
use twillio\res\client;
//configuration de twillio
$SID='mon compte sid';
$auth='mon authentification';
$twillio='+18453285997';
//recuperation du numero de telephone
if($_SERVER['REQUEST_METHOD']==='POST'){
    $telephone=$_POST['telephone'];
    //generation automatique du code otp
    $otp=rand(100000,999999);
    //stockage du code dans la base de donnee
    $_SESSION['otp']='$otp';
    $_SESSION['telephone']='$telephone';
    //envoie du code par sms
    $client=new client($SID,$auth);
    try{
        $client->messages->create(
            $telephone,
            [
                'from'=>+18453285997,
                'body'=>"votre code otp est : $otp"
            ]
            );
            header('location:code.html');
    }catch(exception $e){
        echo 'erreur : '.$e->getMessage();
    }
}

?>