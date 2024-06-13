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


      <h1>S'inscrire</h1>
      <div class="separateur"></div>
      <form action="/register/" method="post" class="formStyle">
        <input type="email" placeholder="email" name="email">
        <input id="inputPassword"  type="password" placeholder="password" name="password" value="<?php echo old("password");?>">
        <span class="error"><?php echo error("password");?></span>
        <input id="inputPasswordConfirm" type="password" placeholder="Confirm password" name="inputPasswordConfirm" value="<?php echo old("passwordConfirm");?>">
        <span class="error"><?php echo error("passwordConfirm");?></span>
        <span class="error"><?php echo error("confirm");?></span>
        <input type="text" placeholder="tel" name="tel">
        <input type="text" placeholder="Titulaire du compte" name="user">
        <input type="text" placeholder="N°carte" name="carte">
        <input type="text" placeholder="crypto" name="crypto">
        <input type="text" placeholder="adress" name="adress">
        <br>
        <button type="submit" name="button">S'inscrire</button>
      </form>

      <div class="more">
        <p>Vous avez déjà un compte ? <a href="/login">Identifiez-vous !</a></p>
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