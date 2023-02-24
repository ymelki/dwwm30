<?php

//1. RECUPERER LES DONNES EN POST
var_dump($_POST);
$titre=$_POST['titre'];
$description=$_POST['description'];
//2. SE CONNECTER A LA B.D.
$PDO=new PDO('mysql:host=127.0.0.1;port=3306;dbname=dwwm30', 'root','');

//3. FAIRE LA REQUETE
// INSERT INTO table VALUES ('valeur 1', 'valeur 2', ...)
$sql="INSERT INTO annonce VALUES (NULL, '$titre', '$description')";
 
$PDO->query($sql);


//4. CHARGER MON CATALOGUE
header('Location: index.php');


?>