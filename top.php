<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <link rel="shortcut icon" type="image/ico" href="img/logo.ico"/>
  <title>TOP 10</title>
  <style>
    body {
      background-image: url('img/concert.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
    footer {
      position: relative;
    	top: 600px;
    }
  </style>
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

  <h1>TOP 10 LISTA</h1>
  <table id='table'>
    <tr>
      <th>#</th>
      <th>NAZIV</th>
      <th>IZVOĐAČ</th>
      <th>GODINA</th>
    </tr>

  <script>
    $(document).ready(function () {
      // FETCHING DATA FROM JSON FILE
      $.getJSON("glazba.json", function (data) {
        var student = '';
        // ITERATING THROUGH OBJECTS
        $.each(data, function (key, value) {
          student += '<tr>';
          student += '<td>' + value.Mjesto + '</td>';
          student += '<td>' + value.Naziv + '</td>';
          student += '<td>' + value.Izvodac + '</td>';
          student += '<td>' + value.Godina + '</td>';
          student += '</tr>';
        });
        $('#table').append(student);
      });
    });
  </script>

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
