<?php

function debug($value){
    echo "<pre>";
       print_r($value);
       echo "</pre>";
}





function isConncted(): bool
{
        return isset($_SESSION['membre']) ? TRUE : FALSE;
}