<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require "config.php";
        $bdd = connect();
        $id=$_POST["id"];
        $nom=$_POST["nom"];
        $prix=$_POST["prix"];
        $photo=$_POST["photo"];
        echo $photo;

        try{
            $sql="UPDATE produit set nom = '$nom', prix = '$prix', photo = '$photo' WHERE id= '$id' ";
            echo $sql ;
            $resultat=$bdd->exec($sql);
        }
        catch(PDOException $e){
            echo "erreur dans la requête <br>". $e-> getMessage(); 
        }
        header("location:espaceadmin.php");
    ?>
</body>
</html>