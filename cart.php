<?php
require 'inc/head.php';
if (!isset($_SESSION['loginname'])){
    header('Location : index.php');
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <?php
        if (isset($_SESSION['cookies'] )){
            foreach ($_SESSION['cookies'] as $cookie['name'] => $nb){
                echo 'Le cookie ' . $cookie['name'] . ' a été ajouté ' . $nb . ' fois' . '</br>';
            }
        }else{
            echo "Votre panier est vide.";
        }

        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
