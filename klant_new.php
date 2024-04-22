<?php
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

?>