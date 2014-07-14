<!DOCTYPE HTML>
<html>
    <head>
        <title>Webshop</title>
        <link rel="stylesheet" href="css/webshop.css">
    </head>
    <body>
        <header>
            <div class="login-form">
                <form id="registreren" action="index.php?action=register" method="post">
                    <input type="submit" value="Registreren">	
                </form>
                <form id="aanmelden" action="index.php?action=login" method="post">
                    <input type="text" name="txtGebruikersnaam" placeholder="gebruikersnaam">
                    <input type="password" name="txtWachtwoord" placeholder="wachtwoord">
                    <input type="submit" value="Aanmelden">	
                </form>
            </div>

        </header>
    </body>
</html>
