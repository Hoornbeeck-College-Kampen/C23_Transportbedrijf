<?php
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
?>