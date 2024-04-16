
<?php
        session_start();
        require "config.php";
        $bdd = connect();
        $login=$_POST["login"];
        $mdp=$_POST["mdp"];
        $sql="SELECT * FROM admin WHERE login = '$login' AND mdp = '$mdp'";
        $resultat = $bdd->query($sql);
        if($nb_lignes=$resultat->rowCount()==0){
            echo "Accès refusé";
        }
        else{
            $_SESSION["autorisation"]="OK";
            header("location:espaceadmin.php");
        }
?>