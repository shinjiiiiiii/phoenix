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
  <header class="header1">
    <nav>
      <img src="../assets/img/Logo.png" alt="logo">

      <div class="hoverLink">
        <a href="">Phoenix</a>
      </div>

      <div class="hoverLink">
        <a href="">Choisir une destination</a>
      </div>

      <div class="hoverLink">
        <a href="">Payer</a>
      </div>

    </nav>

    <section class="formRegister">


    <h1>S'identifier</h1>
      <div class="separateur"></div>
      <form action="/login/" method="post" class="formStyle">
        <input type="email" placeholder="email" name="email">
        <input id="inputPassword"  type="password" placeholder="password" name="password" value="<?php echo old("password");?>">
        <span class="error"><?php echo error("password");?></span>
        <br>
        <button type="submit" name="button">S'identifier</button>
      </form>

      <div class="more">
        <p>Vous avez pas de compte? <a href="/register">Créez vous un compte !</a></p>
      </div>
    </section>

  </header>
  <footer>
    <nav>
      <div>
        <a href="">Vos vacances de rêve ...</a>
      </div>
      <div>
        <a href="">Plage ...</a>
      </div>
      <div>
        <a href="">Urbaine ...</a>
      </div>
      <div>
        <a href="">Croisière ...</a>
      </div>
      <div>
        <a href="">Montagne ...</a>
      </div>
      <div>
        <a href="">A prix tout doux ...</a>
      </div>
    </nav>
  </footer>
</body>

</html>