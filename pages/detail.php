<br><br>
<h1 style="text-align: center;">Détail actu</h1>
<br>

<?php
    if (isset($_GET['id'])) {
        $rqActu = $mysqli->query("SELECT * FROM `actu` WHERE id = '".$_GET['id']."'");
            //var_dump($rqActu) ;
            if ($rqActu->num_rows > 0) {
                $row = $rqActu->fetch_assoc(); //récupère une ligne de résultat sous forme de tableau
                ?>
                    <h2><?php echo $row["title"] ?></h2>
                    <p><?php echo $row["description"] ?></p>
                <?php

                # code...
            } else {
                echo 'Actu introuvable' ;
                # code...
            }
            
        # code...
    }else{
        echo 'nok' ;
    } //end if id
?>