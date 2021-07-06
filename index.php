<?php

$serveur="localhost";
$login="root";
$pass="";
   
try{
    $connexion= new PDO ("mysql:host=$serveur;dbname=webdevelopment",$login,$pass);//j'utilise les bloc try and catch pour la gestion des erreurs
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
    // exercice 1:
    // "Dans la base de données webDevelopment, créer la table languages avec les colonnes :
    // --id (type INT, auto-incrémenté, clé primaire)
    // --language (type VARCHAR)"

    $codesql= "CREATE TABLE languages(
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        language VARCHAR (50),)";//je cree ma table language

    // exercice 2:
    // "Dans la base de données webDevelopment, créer la table tools avec les colonnes suivantes :
    // --id (type INT, auto-incrémenté, clé primaire)
    // --tool (type VARCHAR)"

    // $codesql= "CREATE TABLE tools(
    //     id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     tool VARCHAR (50),)";

    // exercice 3:
    // "Dans la base de données webDevelopment, créer la table frameworks avec les colonnes suivantes :
    // --id (type INT, auto-incrémenté, clé primaire)
    // --name (type VARCHAR)"

    // $codesql= "CREATE TABLE framworks(
    //     id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     `name` VARCHAR (50),)";

    // exercice 4:
    // "Dans la base de données webDevelopment, créer la table librairies avec les colonnes suivantes :
    // --id (type INT, auto-incrémenté, clé primaire)
    // --librairy (type VARCHAR)"

    // $codesql= "CREATE TABLE librairies(
    //     id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     library VARCHAR (50),)";

    // exercice 5:
    // "Dans la base de données webDevelopment, créer la table ide avec les colonnes suivantes :
    // --id (type INT, auto-incrémenté, clé primaire)
    // --librairy (type VARCHAR)"

    // $codesql= "CREATE TABLE ide(
    //     id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     librairy VARCHAR (50),)";

    // exercice 6:
    // "Dans la base de données webDevelopment, créer, si elle n'existe pas, la table frameworks avec les colonnes suivantes :
    // --id (type INT, auto-incrémenté, clé primaire)
    // --name (type VARCHAR)"
    
    // $codesql= "CREATE TABLE IF NOT EXISTS framworks(
    //     id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     `name` VARCHAR (50),)";

    $connexion->exec($codesql);//j'execute mon code sql
    // echo"connexion à la base de donnée webdevelopment est reussi<br>";
    // echo "table language créée dans la base de donnée webdevelopment<br>";
    // echo "table tools créée dans la base de donnée webdevlopment <br>";
    // echo "table framworks créée dans la base de donné webdevelopment<br>";
    // echo "table librairies créée dans la base de donné webdevelopment<br>";
    // echo "table ide  créée dans la base de donné webdevelopment<br>";
    // echo "table fraworks créée si elle n'existe pas dans la base de donné webdevelopment<br>";
}catch(PDOException $e){
    echo'echec : ' . $e->getMessage();
}
?>