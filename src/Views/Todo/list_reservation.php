<?php
ob_start();
?>
<section class="catalogue">
<img class="banniere" src="../assets/img/NZLANDSCAPE.jpg" alt="eau">
    <div class="noflex_reservation">
        
        <?php
        foreach ($list_reservation as $value) {
            ?>
            <table>
            <thead>
                <tr>
                    <th colspan="4">
                        <img src="./assets/img/Logo.png" alt="logo">
                        <p>Récapitulatif de votre réservation pour <?php echo escape($value->getName()) ?></p>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="jaune">Participant(s)</td>
                    <td class="jaune" class="grand"><?php echo escape($value->getNb_personne()) ?></td>
                    <td class="vert">Commande</td>
                    <td class="vert" class="grand"><?php echo escape($value->getReference()) ?></td>
                </tr>

                <tr>
                    <td class="jaune">semaine(s):</td>
                    <td class="jaune" class="grand"><?php echo escape($value->getNb_week()) ?></td>
                    <td class="vert">total</td>
                    <td class="vert" class="grand"><?php echo escape($value->getTotal()) ?> $</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>
                        <p>Bon séjour</p>
                        <img src="./assets/img/Logo.png" alt="logo">
                    </th>
                </tr>
            </tfoot>
        </table>
            <?php
        }
        ?>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>

 <hr>
    <div class="flexoubebou">
        <?php
        foreach ($reservations as $value) {
            ?>
            <a href="/reservation/<?php echo escape($value->getId()) ?>"><img src="../assets/img/<?php echo escape($value->getImage()) ?>" alt="eau"></a>

            <?php
        }
        ?>
    
    </div>






</section>
<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
