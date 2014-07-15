<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/normalize.css" rel="stylesheet">
        <link href="css/pizza_shop.css" rel="stylesheet">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <title>Valentino's PizzaShop</title>
    </head>

    <body>
        <header>
            <div class="container clearFix">
                <h1><a href="ctrl_pizzashop_home.php" id="logo">Valentino's PizzaShop</a></h1>
                    <?php
                    if (isset($_COOKIE["aangemeld"])) {
                        $login = "aangemeld met " . $_COOKIE["aangemeld"];
                    } else {
                        $login = "Gelieve aan te melden om een bestelling te doen";
                    }
                    ?>
                    <br/>
                    <p id="inlogok"> <?php print ($login); ?> </p>
                <nav id="kopnav">
                    <ul id="hoofdmenu">
                        <li><a href="ctrl_pizzashop_home.php">Welkom</a></li>
                        <li><a href="ctrl_aanmelding.php">Aanmelden</a></li>
                        <li><a href="ctrl_pizzashop_bestel.php">Bestellen</a></li>
                        <li><a href="ctrl_pizzashop_gastenboek.php">Gastenboek</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div id="inhoud" class="container">
            <section id="main"" >
                <?php
                foreach ((array) $bedrijfsinfo as $bd_info) {
                    ?> 
                    <div class="kolom">
                        <ul id="alg_info" class="" >
                            <li>
                                <h4>Contactinformatie <br></h4>
                                <p><?php print($bd_info->getNaam()); ?> </p> 
                                <p><?php print($bd_info->getAdres()); ?> </p>
                                <p><?php print($bd_info->getPostcode()->getGemeente()); ?> </p> <br/>
                                <h4>Telefoon <br></h4>
                                <p><?php print($bd_info->getTelefoon()); ?> </p>
                                <p><?php print($bd_info->getGsm()); ?> </p> <br/>
                                <h4>Email <br></h4>
                                <p><?php print($bd_info->getEmail()); ?> </p> <br/>
                                <h4>Openingsuren <br></h4>
                                <p><?php print($bd_info->getOpeninguren()); ?> </p>
                            </li>
                            <li>
                                <h4>Goed om te weten</h4>
                                <p><?php print($bd_info->getAlg_info()); ?> </p> <br/>           
                                <h4>Promotie</h4>
                                <p><?php print($bd_info->getPromotie()); ?> </p> <br/>           
                                <h4>Leveringsvoorwaarden</h4>
                                <p><?php print($bd_info->getLev_vw()); ?> </p> <br/>           
                            </li>
                            <li> 
                                <h4>Faq</h4>
                                <p><?php print($bd_info->getFaq_info()); ?> </p>            
                            </li>
                        </ul>
                    </div>
                    <?php
                }
                ?> 
            </section>
            <!--einde inhoud--> 
        </div>
        <footer>
            <div class="container clearFix"> Copyright Valentino Gahide </div>
        </footer>
    </body>
</html>
