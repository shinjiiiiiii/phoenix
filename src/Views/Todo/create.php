<?php
ob_start();
?>

<section class="create">
    <h1><i class="fas fa-list-alt"></i> Création Todolist :</h1>

    <div>
        <div class="list">
            <div class="top">
                <form action="/dashboard/nouveau" method="post">
                    <input type="text" name="name" value="<?php echo old("name");?>" placeholder="Name list">
                    <button type="submit" name="button"><i class="fas fa-plus"></i></button>
                </form>
                <span class="error"><?php echo error("name");?></span>
            </div>

            <div class="separateur"></div>

            <div class="bottom">
            </div>
        </div>


    </div>

</section>

<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
