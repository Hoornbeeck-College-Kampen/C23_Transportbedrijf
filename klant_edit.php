<?php
include 'inc/header.php';

//header tags
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
