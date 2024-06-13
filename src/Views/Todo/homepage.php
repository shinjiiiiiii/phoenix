<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>— Phoenix —</title>
    <script src="https://kit.fontawesome.com/c1d0ab37d6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/style.css">
    
</head>

<body>
    <header class="header2">
        <nav>
            <img src="./assets/img/Logo.png" alt="logo">

            <div class="hoverLink">
                <a href="">Phoenix</a>
            </div>

            <div class="hoverLink">
                <a href="catalogue">Choisir une destination</a>
            </div>
            <?php
            if (!isset($_SESSION["user"]["username"])) {
                ?>
                <div class="hoverLink">
                    <a href="login">Login</a>
                </div>

                <div class="hoverLink">
                    <a href="register">Register</a>
                </div>

                <?php
            } else {
                ?>
                <div class="hoverLink">
                    <a href="">Payer</a>
                </div>

                <div class="hoverLink">
                    <a href="/list_reservation">Liste de vos reservations</a>
                </div>

                <div class="hoverLink">
                    <a href="logout">Logout</a>
                </div>

                <?php
            }
            ?>

            <input type="text" name="search" placeholder="Search.." class="search">
        </nav>
    </header>

    <main>
        <div class="div_sej"><a href="catalogue">Choisir mon séjour tout de suite !</a></div>
    </main>
   

    <footer>
        <nav>
            <div>
                <a href="/catalogue/1">Vos vacances de rêve ...</a>
            </div>
            <div>
                <a href="/catalogue/2">Plage ...</a>
            </div>
            <div>
                <a href="/catalogue/3">Urbaine ...</a>
            </div>
            <div>
                <a href="/catalogue/4">Croisière ...</a>
            </div>
            <div>
                <a href="/catalogue/5">Montagne ...</a>
            </div>
            <div>
                <a href="/catalogue/6">A prix tout doux ...</a>
            </div>
        </nav>
    </footer>
</body>

</html>

