<?php
//invoegen include database
require_once "inc/database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Klantgegevens</title>
</head>
<body>
    <div class="container">
        <?php
            //menu
            include 'inc/menu.php';

            //header tags

            //gridopmaak
            echo '<main class="main-content">';

        ?>
        <!--tabel-->
        <table id="customers">
            <tr>
                <th>Naam</th>
                <th>Contactpersoon</th>
                <th>Straat</th>
                <th>Huisnummer</th>
                <th>Toevoeging</th>
                <th>Postcode</th>
                <th>Plaats</th>
                <th>Telefoonnummer</th>
                <th>Email</th>
                <th>Acties</th>
            </tr>
        <?php
        //ophalen van de klantgegevens
        $query = "SELECT * FROM klant ORDER BY naam, plaats LIMIT 10";
        $result = mysqli_query($dbconn, $query) or die("Error: " . mysqli_error($dbconn));
        $aantal = mysqli_num_rows($result);
        $contentTable = "";
        
        //tabel aanvullen met klantgegevens
        if ($aantal > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $contentTable .= "<tr>";
                $contentTable .= "<td>" . $row['naam'] . "</td>";
                $contentTable .= "<td>" . $row['cp'] . "</td>";
                $contentTable .= "<td>" . $row['straat'] . "</td>";
                $contentTable .= "<td>" . $row['huisnummer'] . "</td>";
                $contentTable .= "<td>" . $row['toevoeging'] . "</td>";
                $contentTable .= "<td>" . $row['postcode'] . "</td>";
                $contentTable .= "<td>" . $row['plaats'] . "</td>";
                $contentTable .= "<td>" . $row['telefoon'] . "</td>";
                $contentTable .= "<td>" . $row['notitie'] . "</td>";
                $contentTable .= "<td>
                                        <a href='klant_edit.php?id={$row['id']}' class='btn-edit'>
                                        <i class='material-icons md-24'>edit</i></a>
                                        <a href='klant_delete.php?id={$row['id']}' class='btn-delete'>
                                        <i class='material-icons md-24'>delete</i></a>
                                  </td>";
                $contentTable .= "</tr>";
            }
        } else {
            $contentTable .= "<tr><td colspan='9'>Geen klantgegevens gevonden</td></tr>";
        }
    
        $contentTable .= "</table>";
        echo $contentTable;

        echo '</main>';
        ?>
        <!--footer -->
    </div>
    
</body>
</html>