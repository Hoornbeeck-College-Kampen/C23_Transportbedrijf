<?php
include 'inc/header.php';
echo '<header class="head">';
echo '<p>Verwerken van gegevens</p>';
echo '</header>';
echo '<main class="main-content">';
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $action = $_POST['action'] ? $_POST['action'] : 'LEEG';
    switch ($action) {
        case 'InsertKlant':
            insertKlant();
            break;
        case 'UpdateKlant':
            updateKlant();
            break;
        case 'LEEG':
        default:
            echo "Geen actie gevonden";
            break;
    }

}

function insertKlant() {
    global $dbconn;
    $naam = $_POST['fnaam'];
    $cp = $_POST['fcp'];
    $straat = $_POST['fstraat'];
    $huisnummer = $_POST['fhuisnr'];
    $toevoeging = $_POST['ftoevoeging'];
    $postcode = $_POST['fpostcode'];
    $plaats = $_POST['fplaats'];
    $telefoon = $_POST['ftelefoon'];
    $email = $_POST['femail'];
    $query = "INSERT INTO klant (naam, cp, straat, huisnummer, toevoeging, postcode, plaats, telefoon, notitie) VALUES ('$naam', '$cp', '$straat', '$huisnummer', '$toevoeging', '$postcode', '$plaats', '$telefoon', '$email')";
    if (mysqli_query($dbconn, $query)) {
        echo "Nieuwe klant is toegevoegd";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($dbconn);
    }
}

function updateKlant() {
    global $dbconn;
    $klantnr = $_POST['fklantnr'];
    $klantnaam = $_POST['fnaam'];
    $cp = $_POST['fcp'];
    $straat = $_POST['fstraat'];
    $huisnummer = $_POST['fhuisnr'];
    $toevoeging = $_POST['ftoevoeging'];
    $postcode = $_POST['fpostcode'];
    $plaats = $_POST['fplaats'];
    $telefoon = $_POST['ftelefoon'];
    $email = $_POST['femail'];
    $qryUpdate = "UPDATE klant SET naam='$klantnaam', cp='$cp', straat='$straat', huisnummer='$huisnummer', toevoeging='$toevoeging', postcode='$postcode', plaats='$plaats', telefoon='$telefoon', notitie='$email' WHERE id=$klantnr";
    if (mysqli_query($dbconn, $qryUpdate)) {
        echo "Klantgegevens zijn aangepast";
    } else {
        echo "Error: " . $qryUpdate . "<br>" . mysqli_error($dbconn);
    }
}

echo '</main>';
include 'inc/footer.php';
?>