<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Softball-battingscore</title>
    <link rel="stylesheet" href="CSS/matchen-style.css">
    <script src="Scripts/script.js"></script>
</head>
<body>

    <?php
        $link = mysqli_connect("localhost", "root", "", "project softball-battingscore") or die("Verbinding mislukt: ".mysqli_connect_error());
    ?>

    <h1 class="header">leuven04-2024</h1>
    
    <table id="table">
        <tr>
            <th class="p">Frontliners 2 Uit VS Leuven</th>
            <th class="p">Score: 30-16 en 19-17</th>
            <th class="p">Datum: 20/04/2024</th>
        </tr>
    </table>

    <table id="grid">

        <tr>
            <th>Speler</th>
            <th>AB</th>
            <th>K</th>
            <th>BB</th>
            <th>1B</th>
            <th>2B</th>
            <th>3B</th>
            <th>HR</th>
            <th>Safe/e</th>
            <th>DP</th>
            <th>FC</th>
            <th>GO</th>
            <th>LO</th>
            <th>FO</th>
            <th>AVG</th>
            <th>OBP</th>
            <th>SLG</th>
            <th>OPS</th>
        </tr>
        

        <?php
            $result = mysqli_query($link, "SELECT * FROM `leuven04-2024`");
            while ($record = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $record["AB"] . "</td>";
                echo "<td>" . $record["K"] . "</td>";
                echo "<td>" . $record["BB"] . "</td>";
                echo "<td>" . $record["1B"] . "</td>";
                echo "<td>" . $record["2B"] . "</td>";
                echo "<td>" . $record["3B"] . "</td>";
                echo "<td>" . $record["HR"] . "</td>";
                echo "<td>" . $record["Safe/e"] . "</td>";
                echo "<td>" . $record["DP"] . "</td>";
                echo "<td>" . $record["FC"] . "</td>";
                echo "<td>" . $record["GO"] . "</td>";
                echo "<td>" . $record["LO"] . "</td>";
                echo "<td>" . $record["FO"] . "</td>";
                echo "<td>" . $record["AVG"] . "</td>";
                echo "<td>" . $record["OBP"] . "</td>";
                echo "<td>" . $record["SLG"] . "</td>";
                echo "<td>" . $record["OPS"] . "</td>";
                echo "</tr>";
            }
        ?>

        <tr>
            <td>
                <button type="submit" name="Eline Vanneste">Eline Vanneste</button>
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit" name="Elise Hautekeur">Elise Hautekeur</button>
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit" name="Julie Kerckhof">Julie Kerckhof</button>
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit" name="Josephine Berten">Josephine Berten</button>
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit" name="Kaily Blanckaert">Kaily Blanckaert</button>
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit" name="Marie Parret">Marie Parret</button>
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit" name="Adhemar Couwet">Adhemar Couwet</button>
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit" name="Chiel Callens">Chiel Callens</button>
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit" name="Dieter Decorte">Dieter Decorte</button>
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit" name="Emiel Kerckhof">Emiel Kerckhof</button>
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit" name="Luka Decorte">Luka Decorte</button>
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit" name="Ruben Ravestyn">Ruben Ravestyn</button>
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit" name="Tibo Vanden Broeck">Tibo Vanden Broeck</button>
            </td>
        </tr>

    </table>

    <div class="rode-balk"></div>
</body>
</html>