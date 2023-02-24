<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    LISTE D'ANNONCES
    <?php

    /**
     * 1. Se connecter à la B.D.
     * 2. Recuperer les annonces
     * 3. Les afficher dans la page (cards boostrap)
     */

    //1. Se connecter à la B.D. ( Modele  )
    $PDO=new PDO('mysql:host=127.0.0.1;port=3306;dbname=dwwm30', 'root','');
 
    //2. Recuperer les annonces (Modele)
     
    $sql="select * from annonce";
    $resultat=$PDO->query($sql);

    //3 On met les resultats dans un tableau
    $tab=$resultat->fetchAll();
 
    var_dump($tab);
    // en une ligne
    //var_dump(  $PDO->query("select * from annonce")->fetchAll()      );

    // 3. Les afficher dans la page (cards boostrap)  (Vue)

 

    ?>

    <div class="row row-cols-1 row-cols-md-3 g-4">

    <?php  foreach ($tab as $uneannonce) { ?> 
        <div class="col">
            <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">

                    <a href=une_annonce.php?id=<?=$uneannonce['id']?>>
                    <?=$uneannonce['titre']
                    //URL : protocole http
                    //Adresse IP
                    //votre fichier ou la route une_annonce.php
                    //parametre : ?parametre1=XXX&parametre2=yyy&param3=zz
                    // http://localhost/une_annonce.php
                    // cree un lien en HTML qui envoie l'ID en GET
                    ?></a>

                </h5>
                <p class="card-text"><?=$uneannonce['description'] ?>
                <br />
                <a href="supprimer.php?id=<?=$uneannonce['id']?>">
                SUPPRIMER CE PRODUIT
                </a>
            </div>
            </div>
        </div> 
    <?php } ?>



    </div>
</body>
</html>