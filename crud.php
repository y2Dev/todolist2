<?php

    include("config.php") ;

    if(isset($_GET["action"])){
        switch ($_GET["action"]) {
            case "ajouter":
               $maRequete = "INSERT INTO `tasks` (`id`, `tache`, `etat`, `dateins`) VALUES (NULL, '".$_POST["tache"]."', 'n', CURRENT_TIMESTAMP)" ;
              echo  $maRequete   ; 
               //echo "i égal 0";
                break;
            case "realiser":
               
                $maRequete = "UPDATE `tasks` SET `etat` = 'o' WHERE `tasks`.`id` =".$_GET["id"] ;
                break;
            case "supprimer":
            

                $maRequete = "DELETE FROM `tasks` WHERE `tasks`.`id` =".$_GET["id"];
                break;
            default:
              // echo "i n'est ni égal à 2, ni à 1, ni à 0.";
        }

     $mysqli->query($maRequete) ; 


    }
        // redirection par defaut
   // header("location: ".$dir_ws) ;
    


?>