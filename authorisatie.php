<?php
include 'inc/header.php';

if ($_POST['submit']){
    $inlognaam = $_POST['gebruikersnaam'];
    $wachtwoord = $_POST['wachtwoord'];
} else {
    header('refresh:0;url=login.php');
}

$sql = "SELECT gebruiker.id, gebruiker.inlognaam, gebruiker.wachtwoord, rol.naam FROM gebruiker INNER JOIN rol ON gebruiker.rol_id = rol.id WHERE inlognaam = '$inlognaam' AND wachtwoord = '$wachtwoord'";

$result = mysqli_query($dbconn, $sql);
$aantal = mysqli_num_rows($result);
if ($aantal == 1){
    $row = mysqli_fetch_array($result);
    $_SESSION['gebruiker'] = $row['inlognaam'];
    $_SESSION['rol'] = $row['naam'];
    $_SESSION['id'] = $row['id'];
    $_SESSION['ingelogd'] = true;
    header('refresh:0;url=klanten.php');
} else {
    echo "Inloggen mislukt, gebruikersnaam en/of wachtwoord onjuist. Probeer opnieuw in te loggen.";
    session_destroy();
    session_unset();
    mysqli_close($dbconn);
    header('refresh:2;url=login.php');
    exit;
}
include 'inc/footer.php';
?>