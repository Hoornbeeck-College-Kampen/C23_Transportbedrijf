<?php
<<<<<<< HEAD
include 'inc/header.php'; 
//header toevoegen
echo '<header class="head">';
echo '<p>Formulier afhandelen</p>';
echo '</header>';

//main-content
echo '<main class="main-content">';
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $action = isset($_POST["action"]) ? $_POST["action"] : "LEEG";
    switch ($action) {
        case "InsertKlant":
            insertKlant();
            break;
        case "UpdateKlant":
            updateKlant();
            break;
        case "DeleteKlant":
            deleteKlant();
            break;
        case "LEEG":
        default:
            echo "Geen formulier gegevens ontvangen";
            break;
    }
} else {
    header("url=klanten.php");
=======
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

>>>>>>> 998c1e63b703550aa20fc3f73f5b85ab70008adc
}

function insertKlant() {
    global $dbconn;
<<<<<<< HEAD
    $klantnaam = $_POST["klantnaam"];
    $contactpersoon = $_POST["contactpersoon"];
    $straat = $_POST["straat"];
    $huisnummer = $_POST["huisnummer"];
    $toevoeging = $_POST["toevoeging"];
    $postcode = $_POST["postcode"];
    $plaats = $_POST["plaats"];
    $telefoon = $_POST["telefoon"];
    $email = $_POST["email"];
    $qryInsert = "INSERT INTO klant (naam, cp, straat, huisnummer, toevoeging, postcode, plaats, telefoon, notitie) 
                    VALUES ('$klantnaam', '$contactpersoon', '$straat', '$huisnummer', '$toevoeging', '$postcode', '$plaats', '$telefoon', '$email')";
    if (mysqli_query($dbconn, $qryInsert)) {
        echo "Nieuwe klant is toegevoegd";
        header('refresh:1;url=klanten.php');
        exit();
    } else {
        echo "Fout bij toevoegen nieuwe klant: " . mysqli_error($dbconn);
        header('refresh:10;url=klanten.php');
        exit();
    }
}

function updateKlant(){
    global $dbconn;
    $klantId = $_POST["fklantnr"];
    $klantnaam = $_POST["fnaam"];
    $contactpersoon = $_POST["fcp"];
    $straat = $_POST["fstraat"];
    $huisnummer = $_POST["fhuisnr"];
    $toevoeging = $_POST["ftoevoeging"];
    $postcode = $_POST["fpostcode"];
    $plaats = $_POST["fplaats"];
    $telefoon = $_POST["ftelefoon"];
    $email = $_POST["fnotitie"];
    $qryUpdate = "UPDATE klant SET naam='$klantnaam', cp='$contactpersoon', straat='$straat', huisnummer='$huisnummer', toevoeging='$toevoeging', postcode='$postcode', plaats='$plaats', telefoon='$telefoon', notitie='$email' WHERE id=$klantId";
    if (mysqli_query($dbconn, $qryUpdate)) {
        echo "Klantgegevens zijn aangepast";
        header('refresh:1;url=klanten.php');
        exit();
    } else {
        echo "Fout bij aanpassen klantgegevens: " . mysqli_error($dbconn);
        header('refresh:10;url=klanten.php');
        exit();
    }
}

function deleteKlant() {
    global $dbconn;
    $id = isset($_POST["klantnr"]) ? $_POST["klantnr"] : 0;
    $qryKlant = "DELETE
            FROM klant
            WHERE id = {$id}";
    
    if (mysqli_query($dbconn, $qryKlant)) {
        echo "<p>Klant {$id} is verwijderd!</p><br>";
        header("refresh:1, url='klanten.php'");
        exit();
    } else {
        echo "<p>Klant {$id} is <b>NIET</b> verwijderd!</p><br>";
        header("refresh:1, url='klanten.php'");
        exit();
    }
}

echo '</div>'; //frmDetail
echo '</main>'; //main-content
include ("inc/footer.php");

=======
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
>>>>>>> 998c1e63b703550aa20fc3f73f5b85ab70008adc
?>