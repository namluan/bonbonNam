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
    <a class="navbar-brand text-danger" href="espaceadmin.php">Espace admin</a>
    </div>
    </div>
    </nav>
    <form method="POST" action="recuplogin.php">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nom d'utilisateur</label>
            <input type="text" class="form-control" placeholder="nom d'utilisateur" name="login">
        </div>

        <label for="inputPassword5" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" aria-labelledby="passwordHelpBlock" placeholder="mot de passe"name="mdp">
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Se connecter</button>
        </div>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>