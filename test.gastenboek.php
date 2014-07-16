<?php
require_once("test.bericht.class.php");
require_once("test.gastenboek.class.php");

$gb = new Gastenboek();
if (isset($_GET["action"]) && $_GET["action"] == "create") {
    $auteur = $_POST["auteur"];
    $boodschap = $_POST["boodschap"];
    if (!empty($auteur) && !empty($boodschap)) {
        $gb->createBericht($auteur, $boodschap);
    }
}
?>
<!DOCTYPE HTML>
<html>
    <head><title>Gastenboek</title></head>
    <body>
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