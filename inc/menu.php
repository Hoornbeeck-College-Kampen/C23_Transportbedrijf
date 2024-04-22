<?php
//controle ingelogd
<<<<<<< HEAD

//ophalen rol gebruiker

//menu
$menu = '';

$menu = '<nav>
=======
$autRole = isset($_SESSION['rol']) ? strtolower($_SESSION['rol']) : '';
$inlognaam = isset($_SESSION['gebruiker']) ? $_SESSION['gebruiker'] : '';

//ophalen rol van gebruiker

//menu samenstellen
$menu='';

//op basis van rol tonen
switch ($autRole) {
    case 'beheerder':
        $menu = '<nav>
>>>>>>> 998c1e63b703550aa20fc3f73f5b85ab70008adc
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="klanten.php">Klantgegevens</a></li>
                <li><a href="#">Opdrachten</a></li>
<<<<<<< HEAD
                <li><a href="#Beheer" class="dropbn">Beheer</a>
                    <ul>
                        <li><a href="#">Nieuwe gebruikers</a></li>
=======
                <li><a href="#Beheer" class="dropbtn">Beheer</a>
                    <ul>
                        <li><a href="#">Nieuwe gebruiker</a></li>
>>>>>>> 998c1e63b703550aa20fc3f73f5b85ab70008adc
                        <li><a href="#">Wijzigen gebruiker</a></li>
                    </ul>
                </li>
                <li><a href="#">Contact</a></li>
<<<<<<< HEAD
                <li><a href="#">Uitloggen</a></li>
            </ul>
        </nav>';

echo $menu;

=======
                <li><a href="uitloggen.php">Uitloggen</a></li>
            </ul>
        </nav>';
        break;
    case 'administratie':
        $menu = '<nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="klanten.php">Klantgegevens</a></li>
                <li><a href="#">Opdrachten</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="uitloggen.php">Uitloggen</a></li>
            </ul>
        </nav>';
        break;
    case 'planner':
        $menu = '<nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="klanten.php">Klantgegevens</a></li>
                <li><a href="#">Opdrachten</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="uitloggen.php">Uitloggen</a></li>
            </ul>
        </nav>';
        break;  
    default:
        $menu = '';
}

echo $menu;
>>>>>>> 998c1e63b703550aa20fc3f73f5b85ab70008adc
?>