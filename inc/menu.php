<?php
//controle ingelogd

//ophalen rol gebruiker

//menu
$menu = '';

$menu = '<nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="klanten.php">Klantgegevens</a></li>
                <li><a href="#">Opdrachten</a></li>
                <li><a href="#Beheer" class="dropbn">Beheer</a>
                    <ul>
                        <li><a href="#">Nieuwe gebruikers</a></li>
                        <li><a href="#">Wijzigen gebruiker</a></li>
                    </ul>
                </li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Uitloggen</a></li>
            </ul>
        </nav>';

echo $menu;

?>