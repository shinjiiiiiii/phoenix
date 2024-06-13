<?php
ob_start();
?>
<section class="catalogue">
<img class="banniere" src="../assets/img/NZLANDSCAPE.jpg" alt="eau">
    <div class="flex_reservation">

        <?php
        foreach ($reservation as $value) {
            ?>
            <div class="reservation_travel">
            <img src="../assets/img/<?php echo escape($value->getImage()) ?>" alt="eau">
            <h2><?php echo escape($value->getName()) ?></h2>
                <p>1 semaine / personne : <?php echo escape($value->getPrice()) ?> $</p>
            </div>

            <?php
        }
        ?>

        <form action="reservation" method="post">
            <h2>Je complète mes informations de réservation <img src="../assets/img/Logo.png" alt="logo"></h2>
            <input type="email" placeholder="Email de confirmation" name="email">
            <div>
                <input type="number" placeholder="Je pars combien de semaine" name="week" min="1">
                <input type="number" placeholder="Nombre de vacanciers" name="personnes" min="1">
            </div>
            <input type="hidden" name="id" value="<?php echo escape($value->getId()) ?>" >
            <input type="hidden" name="price" value="<?php echo escape($value->getPrice()) ?>">
            <button>Confirmer ma réservation</button>
        </form>

    </div>
    <div class="flexoubebou">
        <?php
        foreach ($reservations as $value) {
            ?>
            <a href="<?php echo escape($value->getId()) ?>"><img src="../assets/img/<?php echo escape($value->getImage()) ?>" alt="eau"></a>

            <?php
        }
        ?>
    
    </div>

</section>
<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
