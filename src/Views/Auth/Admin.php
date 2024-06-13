<?php
ob_start();
?>
<section class="catalogue">
    <div class="admin_cnt">
      <div>
        <h2>Ajouter</h2>
        <form action="store" method="post" enctype="multipart/form-data" class="ajouter">
        <input type="text" placeholder="titre" name="title">
        <input type="text" placeholder="description" name="description">
        <input type="file" name="image">
        <input type="number" min="1" placeholder="le prix" name="prix">
        <select name="select">
          
          <?php
        foreach ($category as $value) {
            ?>
            <option value="<?php echo escape($value->getId()) ?>"><?php echo escape($value->getName()) ?></option>

            <?php
        }
        ?>
        </select>
        <button>Envoyer</button>
        </form>
      </div>

      <div class="del">
        <h2> SUPPRIMER / MODIFIER</h2>
        <form action="" method="post">
        <div>
          <img src="../assets/img/81biNEGAyGL.jpg" alt="poney">
        </div>
        <div>
          <input type="text" name="title" value="poney">
          <input type="text" name="description" value="description">
          <input type="file" name="image" value="81biNEGAyGL.jpg">
          <input type="number" name="price" value="740">
          <select name="select">
          <?php
        foreach ($category as $value) {
            ?>
            <option value="<?php echo escape($value->getId()) ?>"><?php echo escape($value->getName()) ?></option>

            <?php
        }
        ?>
        </select>
        </div>
        </form>
      </div>
    </div>
</section>
<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';