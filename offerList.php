<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Lista ponuda</title>
    </head>
    <body>
        <table style="text-align: left;">
            <tr>
                <th>Slika</th>
                <th>Naziv</th>
                <th>Početna adresa</th>
                <th>Odredišna adresa</th>
                <th>Tip materijala</th>
                <th>Budžet</th>
                <th>Dimenzije</th>
                <th>Težina</th>
                <th>Napomene</th>
            </tr>
            <?php
            require_once ("./logic/common.php");

            $query = "SELECT * FROM offers_cargo WHERE 1";


            try {
                $stmt = $db->prepare($query);
                $result = $stmt->execute();
            } catch (PDOException $ex) {
                die("Failed to run query: " . $ex->getMessage());
            }

            while (($row = $stmt->fetch()) != NULL) {
                echo '<tr>';
                echo '<td>';
                echo '<img src="images/cargo001.png" width="50px" >';
                echo '</td>';
                echo '<td>';
                echo '<a href="">' . $row['title'] . '</a>';
                echo '</td>';
                echo '<td>';
                echo $row['starting_adress'];
                echo '</td>';
                echo '<td>';
                echo $row['destination_adress'];
                echo '</td>';
                echo '<td>';
                echo $row['material_type'];
                echo '</td>';
                echo '<td>';
                echo $row['budget'];
                echo '</td>';
                echo '<td>';
                echo $row['length'] . ',' . $row['width'] . ',' . $row['height'];
                echo '</td>';
                echo '<td>';
                echo $row['weight'];
                echo '</td>';
                echo '<td>';
                echo $row['remarks'];
                echo '</td>';
                echo '</tr>';
            }
            ?>
        </table>
    </body>
</html>
