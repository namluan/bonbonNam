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
    <?php
        require "config.php";
        $bdd = connect();
        $photo=$_GET["photo"];
        $nom=$_GET["nom"];
        $prix=$_GET["prix"];
        $id=$_GET["id"];
        echo $nom;
    ?>
    <form class="row g-3" method="POST" action="validationmodif.php">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Nom du produit</label>
            <input type="text" class="form-control" value="<?php echo $nom ?>" name=nom>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Prix</label>
            <input type="text" class="form-control" id="validationCustom02" value="<?php echo $prix ?>" name=prix>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Image</label>
            <input type="text" class="form-control" value="<?php echo $photo ?>" name=photo>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>
