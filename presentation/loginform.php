<!DOCTYPE HTML>
<html>
    <head>
        <title>Webshop</title>
        <link rel="stylesheet" href="css/webshop.css">
    </head>
    <body>
        <header>
            <form class="registreren" action="registreren.php" method="post">
                <input type="submit" value="Registreren">	
            </form>
            <form class="aanmelden" action="index.php?action=login" method="post">
                <input type="text" name="txtGebruikersnaam" placeholder="gebruikersnaam">
                <input type="password" name="txtWachtwoord" placeholder="wachtwoord">
                <input type="submit" value="Aanmelden">	
            </form>
            
        </header>
    </body>
</html>
