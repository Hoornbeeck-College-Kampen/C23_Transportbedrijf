<?php
//invoegen include database
require_once "database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klantgegevens</title>
</head>
<body>
    <div class="container">
        <?php
            //menu

            //header tags

            //gridopmaak

        ?>
        <!--tabel-->
        <table>
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
                $contentTable .= "</tr>";
            }
        } else {
            $contentTable .= "<tr><td colspan='9'>Geen klantgegevens gevonden</td></tr>";
        }
    
        $contentTable .= "</table>";
        echo $contentTable;
        ?>
        <!--footer -->
    </div>
    
</body>
</html>