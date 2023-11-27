<?php
$isLoggedIn = false;

$username = "michel";
$password = "choucroute";

if(isset($_POST['username'])){
    if($_POST['username'] == $username){

        if(isset($_POST['password'])){
            if($_POST['password'] == $password){
                $isLoggedIn = true;
            }else{
                $content = $wrongPassword;
            }
        }

    }else{
        $content = $badUsername;
    }

}


// logique de connection   $_POST etc etc

//a la fin ,si la connection est acceptée,
//mettre isLoggedIn en true