<?php
require_once "templates.php";
require_once "authentification.php";


if(!$isLoggedIn){
    $content = $loginForm;
}else{

    require_once "poulet.php";

}

