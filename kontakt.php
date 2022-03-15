<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
	<link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <link rel="shortcut icon" type="image/ico" href="img/logo.ico"/>
  <title>KONTAKT</title>
</head>
<body>
  <div class="nav">
    <div class="wrapper">
      <a href="index.php">POČETNA</a>
      <a href="top.php">TOP 10</a>
      <a href="ponuda.php">PONUDA</a>
      <a href="kontakt.php">KONTAKT</a>

      <?php
        if(isset($_SESSION['log']) && $_SESSION['log']==true) {
          echo "<a href='logout.php' class='logout_btn'>ODJAVA</a>";
        } else {
          echo '
          <button class="open" onclick="openForm()">PRIJAVA</button>

          <div class="form-popup" id="login">
            <form action="verify.php" method="POST" class="form-container">
              <button type="button" class="cancel" onclick="closeForm()"><b>X</b></button>

              <input type="text" placeholder="Korisničko ime" name="username" id="username" required>
              <input type="password" placeholder="Lozinka" name="password" id="password" required>

              <button type="submit" class="submit">PRIJAVA</button>
            </form>
          </div>';
        }
      ?>
    </div>
  </div>

  <div class="wrapper">

    <p class="kontakt_main">Adresa</p>
    <p class="adresa">Ul. Lavoslava Ružičke 66<br/>Zagreb, Hrvatska</p>
    <iframe class="karta" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d928.3103214379443!2d15.97108967664638!3d45.795467092052824!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d68b2f1eff91%3A0xd9b8e9975aed9f2e!2sIQ%20bar!5e0!3m2!1shr!2shr!4v1622470682287!5m2!1shr!2shr" width="45%" height="330" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <p class="kontakt_main">Radno vrijeme</p>
    <p class="adresa">Ponedjeljak - Petak: 08:00 - 20:00</p>
    <p class="adresa">Subota: 09:00 - 15:00</p>
    <p class="kontakt_main">Kontakt</p>
    <p class="adresa">Broj telefona: +385(0) 1 472 9055</p>
    <p class="adresa">Broj mobitela: +385(0) 91 732 4270</p>
    <p class="adresa">E-mail: mvidovic@tvz.hr</p>
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-twitter"></i><a/>
  </div>

  <footer>
    <div class="wrapper">
      <br/><p>Projektni zadatak iz kolegija <i>XML programiranje</i></p>
      <br/><p>Autor projekta: <b>Mario Vidović</b></p>
    </div>
  </footer>

  <script>
    function openForm() {
      document.getElementById("login").style.display = "block";
    }

    function closeForm() {
      document.getElementById("login").style.display = "none";
    }
  </script>
</body>
</html>
