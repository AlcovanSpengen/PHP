<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Succesvol aangemeld!</title>
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700%7CRoboto:400,700,300">
</head>
<body>
    
        <h1>Welkom <?php echo $_POST["voornaam"]; ?></h1><br>
        U bent succesvol aangemeld met de volgende gegevens:<br>
    <section>
        <p>Voornaam:</p> <?php echo $_POST["voornaam"]; ?>
        <p>Achternaam:</p> <?php echo $_POST["achternaam"]; ?>
        <p>E-mail:</p><?php echo $_POST["email"]; ?>
        <p>Telefoonnummer:</p><?php echo $_POST["telefoonnummer"]; ?>
        <p>Adres:</p><?php echo $_POST["adres"]; ?>
        <p>Woonplaats:</p><?php echo $_POST["woonplaats"]; ?>
        <p>Hoogst afgeronde opleiding:</p><?php echo $_POST["opleiding"]; ?>
        <p>Opmerkingen:</p><?php echo $_POST["opmerkingen"]; ?>
    </section>
</body>
        
</html>