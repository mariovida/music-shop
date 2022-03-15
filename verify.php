<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="image/ico" href="img/logo.ico"/>
	<title>PRIJAVA</title>
</head>
<body>
	<div class="nav">
    <div class="wrapper">
			<a href="index.php">POČETNA</a>
      <a href="top.php">TOP 10</a>
      <a href="ponuda.php">PONUDA</a>
      <a href="kontakt.php">KONTAKT</a>
    </div>
  </div>

  <?php
    session_start();
    $mydata = simplexml_load_file("users.xml");
    $username="";
    $password="";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $ans = $_POST;
      $username= $ans["username"];
      $password= $ans["password"];

      provjera($username,$password);
    }

    function provjera($username, $password) {
      $xml=simplexml_load_file("users.xml");

      foreach ($xml->user as $usr) {
        $usrn = $usr->username;
        $usrp = $usr->password;
        $usrime=$usr->ime;
        $usrprezime=$usr->prezime;

        if($usrn==$username) {
          if($usrp == $password) {
            $_SESSION['log'] = true;
            echo "<h2 class='welcome_1'>DOBRO DOŠLI</h2>";
            echo "<p class='welcome_2'>Pozdrav, $usrime $usrprezime!</p>";
            echo "<p class='welcome_2'>Vraćam Vas natrag na <a href='index.php'>početnu stranicu</a>.</p>";
            header ("refresh:6; url=index.php");
            return;
          } else {
            echo "NETOČNA LOZINKA";
            return;
          }
        }
      }

      echo "<h2 class='welcome_1'>Korisnik ne postoji!</h2>";
			echo "<p class='welcome_2'>Vraćam vas natrag na <a href='index.php'>početnu stranicu</a>.</p>";
			header ("refresh:4; url=index.php");
      return;
    }
  ?>
</body>
</html>
