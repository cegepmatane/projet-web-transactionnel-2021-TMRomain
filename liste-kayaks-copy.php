<?php

require_once "dao/kayakDAO.php";
$listeKayak = kayakDAO::listeKayak();

require_once "header.php";
?>



<div class="liste-kayak">

    <?php
            foreach ($listeKayak as $kayak) {
                //membreDAO::listeMembre();
                //$idMembre = $kayak["idMembre"];
                //print_r($listeMembre);
            ?>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="images/<?= $kayak['image'];?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?= $kayak['titreAnnonce']; ?></h5>
            <p class="card-text"><?= $kayak["descriptionAnnonce"];?></p>
            <a href="Annonce.php?id=<?php echo $kayak['id']; ?>" class="btn btn-primary">Cliquer pour plus de détail</a>
        </div>
    </div>
<?php
        }
        include_once "footer.php";
     
        ?>


</body>


</html>