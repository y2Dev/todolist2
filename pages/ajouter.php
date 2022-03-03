<h2 class="mt-5">Ajouter une tache</h2>
<form method="post" action="<?php echo $dir_ws ;?>crud.php?action=ajouter"> 
    <div class="mb-3">
        <input type="text" name="tache" class="form-control"  placeholder="Saisissez votre tache ici">
    </div>
    <div class="mb-3">
        <input  type="submit" 
                value="Ajouter" 
                class="btn btn-primary">
    </div>

</form>