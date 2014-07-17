<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/pizza_shop.css" >
        <title>PizzaShop</title>
    </head>
    <body>
        <header>
            <div class="container">
                <h1>PizzaShop</h1>
            </div>
            <div class="container">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#hoofdmenu">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="ctrl_pizzashop_home.php"> <img src="images/textlogosmall.png"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="hoofdmenu">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="ctrl_pizzashop_home.php">Home</a></li>
                            <li><a href="ctrl_pizzashop_bestel.php">Bestellen</a></li>
                            <li><a href="ctrl_pizzashop_wiezijnwe.php">Wie zijn we</a></li>
                            <li><a href="test.gastenboek.php">Gastenboek</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <h2>Berichten</h2>
        <?php
        $berichten = $gb->getAlleBerichten();
        ?>
        <ul>
            <?php
            foreach ($berichten as $bericht) {
                ?>
                <strong>Auteur:</strong> <?php print($bericht->getAuteur()); ?>
                <br><em>
                    <?php print($bericht->getBoodschap()); ?>
                </em></p>
            <hr>
            <?php
        }
        ?>
    </ul>

    <h2>Bericht toevoegen</h2>
    <form method="post" action="test.gastenboek.php?action=create">
        <p><strong>Auteur:</strong> <input type="text" name="auteur"></p>
        <p><strong>Boodschap:</strong><br>
            <textarea name="boodschap" cols="50" rows="4" placeholder="boodschap van maximaal 200 tekens"></textarea></p>
        <input type="submit" value="Verzenden">
    </form>
</body>
</html>
