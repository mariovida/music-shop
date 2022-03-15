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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <link rel="shortcut icon" type="image/ico" href="img/logo.ico"/>
	<title>NASLOVNICA</title>
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

  <div class="main">
    <div class="wrapper">
      <div class="vijest">
        <h2>Koncert Jacka Savorettija odgođen za 2022. godinu</h2>
        <h3>Koncert Jacka Savorettija, koji se na Tvrđavi sv. Mihovila trebao održati ovog ljeta, odgađa se za 2022. godinu.</h3>
        <img src="img/jack.png" />
        <p>Unatoč poboljšanju epidemiološke situacije, prevelika doza neizvjesnosti dovela je do nemogućnosti spajanja datuma turneje koju je Savoretti trebao održati ovoga ljeta, stoga se ona prebacuje za sljedeću godinu. Novi datum Savorettijeva šibenskog koncerta još uvijek nije definiran, a o njemu će obožavatelji biti obaviješteni čim bude poznat, poručuje organizator Tvrđava kulture Šibenik.</p>
        <h4>VELIKI UMJETNIK DANAŠNJICE</h4>
        <p>Savorettijeva glazba našla je mjesto u poznatim TV serijama Grey's Anatomy, Sons of Anarchy i One Tree Hill, a izvedbama pjesama Catapult i Only You uživo u emisiji Grahama Nortona postao je prepoznatljiv svjetskom auditoriju. U autorskom stvaranju, Savoretti je uvijek birao ići zahtjevnijim pravcima, ne odstupajući od vlastitih ideja koje su ga s godinama sve više činile prepoznatljivim. Upornost mu se ubrzo isplatila s brojnim nastupima na cijenjenim europskim pozornicama, a zatim i na iznimno uglednim festivalima poput švicarskog Montreaux Jazz Festivala.</p>
        <h4>ULAZNICE KUPLJENE U CITY POINTU TVRĐAVE KULTURE</h4>
        <p>U City Pointu pravo na povrat sredstava kupci imaju uz predočenje ulaznice i računa, za vrijeme redovnog radnog vremena.</p>
        <h4>PRETHODNI NASTUPI</h4>
        <p>Engleski glazbenik talijanskih korijena na tvrđavi će izvesti najveće glazbene uspješnice iz 14 godina duge karijere s ukupno šest izdanih albuma. Nastupajući na najvećim i najljepšim svjetskim pozornicama poput Wembleyja i Teatro la Fenice, nema sumnje kako će jedinstveni Savoretti oduševiti i publiku u Šibeniku.</p>
      </div><br/><br/><hr>

      <div class="vijest">
        <h2>Billie Eilish najavila turneju u sklopu koje dolazi u Europu</h2>
        <h3>Nakon što je objavila singl “Your Power” i najavila novi studijski album koji će biti objavljen 30. srpnja, Billie Eilish najavila je i turneju koja prati izlazak albuma.</h3>
        <img src="img/billie.jpg" />
        <p>"Happier Than Ever” naziv je svjetske turneje koja kreće u veljači 2022. godine iz New Orleansa te će ukupno održati 32 koncerta u Sjevernoj Americi nakon kojih kreće u Europi na dodatnih 18 koncerata u arenama. U Europi će biti od 3. lipnja, a ulaznice kreću u prodaju 28. svibnja ove godine.</p>
        <h4>CIJENA ULAZNICA</h4>
        <p>Cijene ulaznica Billie Eilish pomalo su razljutile neke od fanova, jer se njezine ulaznice za Happer Than Ever World Tour ovog tjedna prodaju. Eilish, koja je prošlog tjedna najavila svoju svjetsku turneju 2022. i koristila sustav Ticketmaster Verified Fan kako bi procijenila potražnju obožavatelja i vjerojatno utjecala na dinamične odluke o cijenama kako bi maksimizirala prihod, postiže određeni pomak u odnosu na cijene koje vide na primarnom tržištu karata.</p>
        <h4>DATUMI KONCERATA U EUROPI</h4>
        <p>
          3.6.2022. - SSE Arena, Belfast, Sjeverna Irska<br/>
          4.6. i 5.6.2022. - 3Arena, Dublin, Irska<br/>
          7.6. i 8.6.2022. - AO Arena, Manchester, Engleska<br/>
          10.6., 11.6. i 12.6.2022. - The O2, London Engleska<br/>
          14.6.2022. - The SSE Hydro, Glasgow, Škotska<br/>
          15.6.2022. - Utilita Arena, Birmingham, Engleska<br/>
          16.6.2022. - The O2, London, Engleska<br/>
          18.6.2022. - Ziggo Dome, Amsterdam, Nizozemska<br/>
          19.6.2022. - Festhalle, Frankfurt, Njemačka<br/>
          21.6.2022. - Lanxess Arena, Köln, Njemačka<br/>
          22.6.2022. - Accor Arena, Pariz, Francuska<br/>
          28.6.2022. - Sportpaleis, Antwerpen, Belgija<br/>
          30.6.2022. - Mercedes-Benz Arena, Berlin, Njemačka<br/>
          2.7.2022. - Hallenstadion, Zürich, Šivcarska<br/>
        </p>
      </div><br/><br/>
    </div>
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
