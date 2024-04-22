<?php
include 'inc/header.php';

//header tags
<<<<<<< HEAD
echo '<header class="head">';

//url voor nieuwe klant
echo '</header>';
echo '<main class="main-content">';
//form edit klant
echo '<div id="frmDetail">';
if (isset($_GET["id"])) {
    $klantId = $_GET["id"];
} else {
    header('refresh:2;url=klanten.php');
}

//ophalen klantgegevens
$query = "SELECT * FROM klant WHERE id = $klantId";

$result = mysqli_query($dbconn, $query) or die("Error: " . mysqli_error($dbconn));
if (!mysqli_num_rows($result)==1) {
    header('refresh:2;url=klanten.php');
    exit();
}

//resultaat positief dan klantgegevens tonen
$klant = mysqli_fetch_array($result);
=======

//gridopmaak
echo '<main class="main-content">';

//controleer get/id
echo '<div id="frmDetail">';
if (isset($_GET['id'])){
    $klantId = $_GET['id'];
} else{
    header('refresh: 2; url=klanten.php');
    exit();
}

//form edit klant
$queryKlant = "SELECT * FROM klant WHERE id = $klantId";
$resultKlant = mysqli_query($dbconn, $queryKlant) or die("Error: " . mysqli_error($dbconn));
if (!mysqli_num_rows($resultKlant) == 1){
    echo "Geen klantgegevens gevonden";
    header('refresh: 2; url=klanten.php');
    exit();
}

$klant = mysqli_fetch_assoc($resultKlant);
>>>>>>> 998c1e63b703550aa20fc3f73f5b85ab70008adc
?>
<div>
    <form action="dataverwerken.php" method="post" class="frmDetail">
        <input type="hidden" name="action" value="UpdateKlant">
        <label for="fklantnr">Klantnummer:</label>
        <input type="text" id="fklantnr" name="fklantnr" value="<?php echo $klant['id']; ?>" readonly>
        <label for="fnaam">Naam:</label>
        <input type="text" id="fnaam" name="fnaam" value="<?php echo $klant['naam']; ?>">
        <label for="fcp">Contactpersoon:</label>
        <input type="text" id="fcp" name="fcp" value="<?php echo $klant['cp']; ?>">
        <label for="fstraat">Straat:</label>
        <input type="text" id="fstraat" name="fstraat" value="<?php echo $klant['straat']; ?>">
        <label for="fhuisnr">Huisnummer:</label>
        <input type="text" id="fhuisnr" name="fhuisnr" value="<?php echo $klant['huisnummer']; ?>">
        <label for="ftoevoeging">Toevoeging:</label>
        <input type="text" id="ftoevoeging" name="ftoevoeging" value="<?php echo $klant['toevoeging']; ?>">
        <label for="fpostcode">Postcode:</label>
        <input type="text" id="fpostcode" name="fpostcode" value="<?php echo $klant['postcode']; ?>">
        <label for="fplaats">Plaats:</label>
        <input type="text" id="fplaats" name="fplaats" value="<?php echo $klant['plaats']; ?>">
        <label for="ftelefoon">Telefoonnummer:</label>
        <input type="text" id="ftelefoon" name="ftelefoon" value="<?php echo $klant['telefoon']; ?>">
        <label for="femail">Email:</label>
<<<<<<< HEAD
        <input type="text" id="fnotitie" name="fnotitie" value="<?php echo $klant['notitie']; ?>">
        <div class="submitbtn">
            <input type="submit" name="submit" value="Opslaan" class="btnDetailSubmit">
        </div>
    </form>
</div>
        

<?php
echo '</main>';
//include footer
include 'inc/footer.php';
?>
=======
        <input type="text" id="femail" name="femail" value="<?php echo $klant['notitie']; ?>">
        <div class="submitbtn">
            <input type="submit" value="Opslaan" class="btnDetailSubmit">
        </div>
    </form>
</div>

<?php
echo '</div>'; //frmDetail
echo '</main>';
//footer
include 'inc/footer.php';
?>
>>>>>>> 998c1e63b703550aa20fc3f73f5b85ab70008adc
