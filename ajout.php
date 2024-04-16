<?php session_start();
 if(isset($_SESSION["autorisation"]) and $_SESSION["autorisation"]=="OK"){
?>
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

       
            <form method="POST" action="recupajout.php" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Nom du produit</label>
                <input class="form-control" name="nomprod">
            </div>
            <div class="mb-3">
                <label class="form-label">Prix du produit</label>
                <input class="form-control" name="prixprod">
            </div>
            <div class="mb-3 input-group ">
                <input type="file" class="form-control" name="image">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">enregistrer</button>
            </div>
            </form>";
        <?php
        }
        else{
            echo "accès refusé";
        }
        ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>