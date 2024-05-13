<?php
        $link = mysqli_connect("localhost", "root", "", "project softball-battingscore") or die("Verbinding mislukt: ".mysqli_connect_error());

        if(isset($_POST['home'])){
            header("Location: start.php");
            exit;
        }
    
        if(isset($_POST['spelerpag'])){
            header("Location: speler.php");
            exit;
        }
    
        if(isset($_POST['seizoenpag'])){
            $selectedOption = $_POST['seizoen'];
            switch ($selectedOption) {
                case '2022-2023':
                    header("Location: seizoen 22-23.php");
                    break;
                case '2023-2024':
                    header("Location: seizoen 23-24.php");
                    break;
            }
            exit;
        }
    
        if(isset($_POST['adminpag'])){
            header("Location: admin.php");
            exit;
        }
    
        if(isset($_POST['Logout'])){
            header("Location: logout.php");
            exit;
        }
    
    ?>

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
    <h1 class="header">Frontliners 2 Uit VS Frontliners OG</h1>
    
    <!-- surfbalk -->
    <form method="post">
        <div class="grid-container-balk">
        <div class="grid-item-balk">
                <button class="balkbutton" type="submit" name="home">Home</button>
            </div>
            <div class="grid-item-balk">
                <button class="balkbutton" type="submit" name="spelerpag">Speler</button>
            </div>
            <div class="grid-item-balk">

                <select name="seizoen" id="seizoen">
                    <option value="2022-2023">2022-2023</option>
                    <option value="2023-2024">2023-2024</option>
                </select>

                <button class="balkbutton" type="submit" name="seizoenpag">Seizoen</button>
            </div>
            <div class="grid-item-balk">
                <button class="balkbutton" type="submit" name="adminpag">Admin</button>
            </div>
            <div class="grid-item-balk">
                <button class="balkbutton" type="submit" name="Logout">Logout</button>
            </div>
        </div>
    </form>

    <table id="table">
        <tr>
            <th class="p">Score: 18-10 en 5-6</th>
            <th class="p">Datum: 13/04/2024</th>
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

            $result = mysqli_query($link, "SELECT * FROM `frontlinersog04-2024` ORDER BY `Speler`");
            while ($record = mysqli_fetch_array($result)) {
                echo "<tr>";
                $speler_pagina = "Speler pagina's/" . strtolower(str_replace(' ', '_', $record["Speler"])) . ".php";
                echo "<td> <a href=\"" . $speler_pagina . "\">" . $record["Speler"] . "</a> </td>";

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

    </table>

    <div class="rode-balk"></div>
</body>
</html>