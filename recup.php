<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"> 
    <title>Document</title>
</head>
<body>
    <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand text-danger" href="index.php">NAMPROD</a>
    <div class="" style="">
        <form class="d-flex" role="search" method="POST" action="recup.php">
            <input class="form-control me-2" type="search" name="search">
            <button class="btn btn-outline-danger" type="submit">Search</button>
        </form>
    </div>
    <a class="navbar-brand text-danger" href="ajout.php">Ajouter un produit</a>
    <div class="mx">
            <form class="container-fluid d-flex">
                <button class="btn btn-outline-danger me-2" type="button">Panier</button>
            </form>
    <a class="navbar-brand text-danger" href="login.php">Espace admin</a>
    </div>
    </div>
    </nav>
    <h2 class="mx-auto p-3">Nos Produits</h2>
    <?php
        include "config.php";
        $connect = connect();

        $search=strtoupper($_POST["search"]);
        $sql = "select * from produit where upper(nom)LIKE '%$search%'";
        $resultat = $connect->query($sql);
        while($produit = $resultat->fetch(PDO::FETCH_OBJ))
        {
                ?><div class="card text-center" style="width: 18rem;">
                <img src="<?=$produit->photo?>" class="card-img-top">
                <div class="card-body">
                <h5 class="card-title"><?= $produit->nom?></h5>
                <p class="card-text"><?= $produit->prix ?></p>
                <a href="#" class="btn btn-danger">Ajouter au Panier</a>
                </div>
                </div><?php
        }
    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>