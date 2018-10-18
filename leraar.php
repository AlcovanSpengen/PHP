<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>School</title>
        <link rel="stylesheet" href="leraar.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700%7CRoboto:400,700,300">
    </head>
    <header>
        <nav class="navbar">
            <ul>    
            <li><a href="school.php">Home</a></li>
            <li><a href="leraar.php">Aanmelden leraren</a></li>
            <li><a href="leerling.php">Aanmelden leerlingen</a></li>
            </ul>
        </nav>
    </header>
    <body>

<?php
// define variables and set to empty values
$voornaam = $achternaam = $email = $telefoonnummer = $adres = $woonplaats = $vak = $opmerkingen = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $voornaam = test_input($_POST["voornaam"]);
  $achternaam = test_input($_POST["achternaam"]);
  $email = test_input($_POST["email"]);
  $telefoonnummer = test_input($_POST["telefoonnummer"]);
  $adres = test_input($_POST["adres"]);
  $woonplaats = test_input($_POST["woonplaats"]);
  $vak = test_input($_POST["vak"]);
  $opmerkingen = test_input($_POST["opmerkingen"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

        <section class="aanmeldpagina">
           <form id="contact-form" action="form1.php" method="post">
               <h1>Aanmeldformulier Leraren</h1>
                    <div class="form">
                        <input type="text" name="voornaam" placeholder="Vul hier uw voornaam in" required="required" class="form-control">
                    </div>
                    <div class="form">
                        <input type="text" name="achternaam" placeholder="Vul hier uw achternaam in" required="required" class="form-control">
                    </div>
                    </fieldset>
                    <div class="form">
                        <input type="text" name="email" placeholder="Vul hier uw E-mail in" required="required" class="form-control">
                    </div>
                    <div class="form">
                        <input type="text" name="telefoonnummer" placeholder="Vul hier uw telefoonnummer in" required="required" class="form-control">
                    </div>
                    <div class="form">
                        <input type="text" name="adres" placeholder="Vul hier uw adres in" required="required" class="form-control">
                    </div>
                    <div class="form">
                        <input type="text" name="woonplaats" placeholder="Vul hier uw woonplaats in" required="required" class="form-control">
                    </div>
                    <div class="form">
                        <input type="text" name="vak" placeholder="Vul hier uw vak in" required="required" class="form-control">
                    </div>
                    <div class="form">
                        <textarea name="opmerkingen" placeholder="Opmerkingen" rows="4" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="submit">Aanmelden</button>
                  </div>
            </form>
        </section>
    </body>
</html>