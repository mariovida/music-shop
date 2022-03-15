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
  <title>SHOP</title>
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

  <div class="song">
  <?php
    $xml = simplexml_load_file('glazba.xml');
    foreach ($xml->Pjesma as $element) {
      echo '
          <img class="cover" src="img/covers/'.$element->Slika.'">
          <div class="info">
            <h1>'.$element->Naziv.'</h1>
            <h2>'.$element->Izvodac.'</h2>
            <h3>Cijena: '.$element->Cijena.'</h3>
            <a class="shop" href="#"><i class="fas fa-shopping-cart"></i></a>
          </div>
      ';
      echo '<br/><br/><br/><br/><hr class="line_shop"/>';
    }
  ?>
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
