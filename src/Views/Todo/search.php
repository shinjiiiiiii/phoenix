<?php
ob_start();
?>
<section class="catalogue">
    <img class="banniere" src="../assets/img/NZLANDSCAPE.jpg" alt="eau">
    <?php
        ?>
    <div class="flex_cata">

        <?php
        foreach ($search as $value) {
            ?>
            <div>
                <img src="../assets/img/<?php echo escape($value->getImage()) ?>" alt="eau">
                <h2><?php echo escape($value->getName()) ?></h2>
                <p><?php echo escape($value->getDescription()) ?></p>

                <a href="../reservation/<?php echo escape($value->getId()) ?>"><Button>Réserver maintenant !</Button></a>
            </div>

            <?php
        }
        ?>
    </div>
</section>
<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
