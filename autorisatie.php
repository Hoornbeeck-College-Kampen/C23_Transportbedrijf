<?php
include 'inc/header.php';

if ($_POST['submit']) {
    $username = $_POST['username'] ? $_POST['username'] : '';
    $password = $_POST['password'] ? $_POST['password'] : '';
} else {
    header('refresh: 1; url=login.php');
}

//selectquery opbouwen. neem daarin al de inlognaam en wachtwoord mee!;
$query="SELECT gebruiker.id, gebruiker.inlognaam, gebruiker.wachtwoord, rol.naam FROM gebruiker
            INNER JOIN rol ON gebruiker.rol_id=rol.id
          where inlognaam='".$username."' and wachtwoord='".$password."';";
//$resultaat bepalen....
$result=mysqli_query($dbconn, $query);

//aantal records bepalen....
$aantal=mysqli_num_rows($result);
if ($aantal==1){ //let op dubbele ==
    while ($row=mysqli_fetch_array($result)) {
        $rol=$row['naam'];
    }
    $_SESSION['inlognaam']=$username;
    $_SESSION['wachtwoord']=$password;
    $_SESSION['rol']=$rol;
    $_SESSION['ingelogd']=true;
    header('refresh: 1; url=programma.php');
    exit;
}
else {
    echo 'Helaas, uw inlognaam en/of wachtwoord corresponderen niet met onze gegevens. U wordtdoorgestuurd...<br>';
    session_destroy();
    session_unset();
    //sluiten db-connectie
    mysqli_close($dbconn);
    header('refresh: 5; url=login.php');
    exit;
}
include ("inc\footer.php");
?>
 

?>