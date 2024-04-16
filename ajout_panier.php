<?php 
session_start();
            $id = $_GET['id'];
            echo $id;
            if(!isset($_SESSION['panier'])){
                $_SESSION['panier'] = array();
            }
            
            if(isset($_SESSION['panier'][$id]))
            {
                $_SESSION['panier'][$id]++;
            }
            else
            {
                $_SESSION['panier'][$id]=1;
            }
            
            $_SESSION['succes']="le produit a été ajouté au panier !";
            
            if(!empty($_SESSION['succes']))
            {
                ?>
                    <div class="alert alert-success" role="alert" data-auto-dismiss="2000">
                    <?php echo $_SESSION['succes']; ?>
                </div>
                <?php
            }
            header("location:index.php");
        ?>
        <script src="auto_dismiss.js"></script>
