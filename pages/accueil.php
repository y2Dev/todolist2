<br><br>
<h1>ACCUEIL</h1>
<br>

<?php

/* Sélection de toutes les lignes de  actu */
$resultQueryActu = $mysqli->query("SELECT * FROM `actu` ORDER BY `id` DESC ");
//printf("Nombre de lignes affectées (SELECT): %d\n", $mysqli->affected_rows);
 

//var_dump($resultQueryActu) ;
//verif if num_rows 
?>

<?php
    if ($resultQueryActu->num_rows>0){
      foreach ($resultQueryActu as $rowActu){
        ?>
            <p>
              <br>
              <a class="liens" href="<?php echo $dir_ws."index.php?mod=detail&id=".$rowActu["id"] ?>"><?php echo $rowActu["title"] ?></a>
            </p>

        <?php
            }
    }else {
      ?>
      Pas d'actu 
      <?php
    }

?>