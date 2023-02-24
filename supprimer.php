<?php
/**
 * 1. Se connecter à la B.D

 * 2. Appliquer la requête de suppression
 * 3. Charger la page du catalogue MAJ
 */
//* 1. Se connecter à la B.D
    $PDO=new PDO('mysql:host=127.0.0.1;port=3306;dbname=dwwm30', 'root','');
   
    //2. Appliquer la requête de suppression
    //recuperation de l'identifiant dans l'URL
    $id=$_GET['id'];
    $sql="delete from annonce where id=$id";
    $PDO->query($sql);

    //3. Charger la page du catalogue MAJ
    header('Location: index.php');

 ?>