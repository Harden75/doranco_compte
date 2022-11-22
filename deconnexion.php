<?php

require_once"inc/init.php";


if(isConncted()){
     
}

unset($_SESSION['membre']);

header("location:connexion.php");
exit;

