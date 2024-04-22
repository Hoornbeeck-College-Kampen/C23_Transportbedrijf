<?php
<<<<<<< HEAD
include 'inc/header.php'; 
//header toevoegen
echo '<header class="head">';
echo '<p>Nieuwe klant toevoegen</p>';
echo '</header>';

//main-content
echo '<main class="main-content">';
//formulier
echo '<div id="frmDetail">';
?>
<div>
    <form action="dataverwerken.php" method="post" class="frmDetail">
        <input type="hidden" name="action" value="InsertKlant">
        <label for="fklantnaam">Naam klant:</label>
        <input type="text" name="klantnaam" id="fklantnaam">
        <label for="fcontactpersoon">Contactpersoon.:</label>
        <input type="text" name="contactpersoon" id="fcontactpersoon">
        <label for="fstraat">Straat:</label>
        <input type="text" name="straat" id="fstraat">
        <label for="fhuisnummer">Huisnummer:</label>
        <input type="text" name="huisnummer" id="fhuisnummer">
        <label for="ftoevoeging">Toevoeging:</label>
        <input type="text" name="toevoeging" id="ftoevoeging">
        <label for="fpostcode">Postcode:</label>
        <input type="text" name="postcode" id="fpostcode">
        <label for="fplaats">Plaats:</label>
        <input type="text" name="plaats" id="fplaats">
        <label for="ftelefoon">Telefoon:</label>
        <input type="text" name="telefoon" id="ftelefoon">
        <label for="femail">Email:</label>
        <input type="text" name="email" id="femail">
        <div class="submitbtn">
            <input type="submit" name="submit" value="Voeg klant toe" class="btnDetailSubmit">
        </div>
    </form>
</div>


<?php
echo '</div>'; //frmDetail
echo '</main>'; //main-content
include ("inc/footer.php");

=======
include 'inc/header.php';

//header tags
echo '<header class="head">';
echo '<p>Nieuwe klant</p>';
echo '</header>';

//gridopmaak
echo '<main class="main-content">';

//formulier klant
echo '<div id="frmDetail">';
?>

<div>
    <form action="dataverwerken.php" method="post" class="frmDetail">
        <input type="hidden" name="action" value="InsertKlant">
        <label for="fnaam">Naam:</label>
        <input type="text" id="fnaam" name="fnaam" value="">
        <label for="fcp">Contactpersoon:</label>
        <input type="text" id="fcp" name="fcp" value="">
        <label for="fstraat">Straat:</label>
        <input type="text" id="fstraat" name="fstraat" value="">
        <label for="fhuisnr">Huisnummer:</label>
        <input type="text" id="fhuisnr" name="fhuisnr" value="">
        <label for="ftoevoeging">Toevoeging:</label>
        <input type="text" id="ftoevoeging" name="ftoevoeging" value="">
        <label for="fpostcode">Postcode:</label>
        <input type="text" id="fpostcode" name="fpostcode" value="">
        <label for="fplaats">Plaats:</label>
        <input type="text" id="fplaats" name="fplaats" value="">
        <label for="ftelefoon">Telefoonnummer:</label>
        <input type="text" id="ftelefoon" name="ftelefoon" value="">
        <label for="femail">Email:</label>
        <input type="text" id="femail" name="femail" value="">
        <div class="submitbtn">
            <input type="submit" value="Opslaan" class="btnDetailSubmit">
        </div>
</div>
<?php
echo '</div>'; //frmDetail
echo '</main>';
//footer
include 'inc/footer.php';
>>>>>>> 998c1e63b703550aa20fc3f73f5b85ab70008adc
?>