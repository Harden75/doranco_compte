<?php 

 //Déclaration de la session
 // c'est obligatoire de la déclarer au tout début de notre site
session_start();
try {
    
    $type_bdd = "mysql";
    $host = "localhost";
    $dbname = "doranco_compte";
    $username = "root";
    $password = "";
    $options = [
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING,
        PDO::ATTR_DEFAULT_FETCH_MODE=> PDO::FETCH_ASSOC // Ici je définis que le mode de récupération des données par défaut sera sous forme associative
    ];

    $bdd = new PDO("$type_bdd:host=$host;dbname=$dbname", $username, $password, $options);

} catch (Exception $e) {
    die("ERREUR CONNEXION BDD : " . $e->getMessage());	
}


require_once "functions.php";

$errorMessage = "";
$successMessage = "";

