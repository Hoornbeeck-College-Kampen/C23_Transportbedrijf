<?php
include 'inc/header.php'; 
//header toevoegen
echo '<header class="head">';
//url om nieuw klant aan te maken
echo '</header>';

//main-content
echo '<main class="main-content">';
echo '<div id="frmDetail">';
if (isset($_GET["id"])) {
    $klantId = $_GET["id"];
    echo '<div>';
        echo 'Weet u zeker dat klant ' . $klantId . ' verwijderd moet worden?';
        echo '<form action ="dataverwerken.php" method="POST" class="frmDetail">';
        echo '<input type="hidden" name="action" value="DeleteKlant">';
        //echo '<label for="fklantnr">Klantnr.:</label>';
        echo '<input type="hidden" name="klantnr" value="'.$klantId .'" id="fklantnr">';
        echo '<div class="submitbtn">';
        echo '<input type="submit" name="submit" value="OK" class="btnDetailSubmit">&nbsp;';
        echo '<input type="submit" name="submit" value="Annuleren" class="btnDetailSubmit"></div></form></div>';
} else {
    header('refresh: 2; url=klanten.php');
}

echo '</div>'; //frmDetail
echo '</main>'; //main-content
include ("inc/footer.php");
?>