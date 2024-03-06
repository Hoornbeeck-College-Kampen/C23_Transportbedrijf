<?php
//initialiseren
define("HOST", "localhost" ) ;
define("USER", "root");
define("PASSWORD", "");
define("DATABASE", "transportbedrijf");
$dbconn = "";

//connectie maken
try{
    $dbconn = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
} catch (exception $e) {
    echo "Error: " . $e;
}

//functie om de connectie te sluiten
function fnCloseDb($dbconn){
    mysqli_close($dbconn) or die("Error: " . mysqli_error($dbconn));
}
?>