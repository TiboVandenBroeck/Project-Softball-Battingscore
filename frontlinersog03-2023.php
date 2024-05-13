<?php
        $link = mysqli_connect("localhost", "root", "", "project softball-battingscore") or die("Verbinding mislukt: ".mysqli_connect_error());

        session_start();n

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if(isset($_POST["Postcomment"]) && !empty($_POST["auteur"]) && !empty($_POST["comment"])) {

                $link = mysqli_connect("localhost", "gebruikersnaam", "wachtwoord", "database");
        
                if (!$link) {
                    die("Verbinding mislukt: " . mysqli_connect_error());
                }
                //beveiliging tegen Code Injection
                $auteur = mysqli_real_escape_string($link, $_POST["auteur"]);
                $bericht = mysqli_real_escape_string($link, $_POST["comment"]);
        
                $query = "INSERT INTO `comments` (Auteur, Bericht) VALUES ('$auteur', '$bericht')";
                if (mysqli_query($link, $query)) {
                    header("Location: ".$_SERVER['PHP_SELF']);
                    exit();
                } else {
                    echo "Fout bij het toevoegen van de opmerking: " . mysqli_error($link);
                }
            }
        }
        
        $result = mysqli_query($link, "SELECT * FROM `comments`");
        
        if (!$result) {
            die("Query mislukt: " . mysqli_error($link));
        }
        
        $num_rows = mysqli_num_rows($result);

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
    <h1 class="header">Frontliners 2 Thuis VS Frontliners OG</h1>

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

    <div class="wrapper">
    <table id="table">
        <tr>
            <th class="p">Score: 15-5 en 12-3</th>
            <th class="p">Datum: 12/03/2023</th>
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

            $result = mysqli_query($link, "SELECT * FROM `frontlinersog03-2023` ORDER BY `Speler`");
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

    <br></br>

    <form action="" method="post">
        <label class="commentlbl" for="name">Auteur:</label><br>
        <input type="text" id="name" name="auteur"><br>
        <label class="commentlbl" for="comment">Opmerking:</label><br>
        <textarea id="comment" name="comment" rows="4" cols="50"></textarea><br>
        <input class="commentbtn" type="submit" name="Postcomment" value="Plaats opmerking">
    </form>

    <?php
        $comments_result = mysqli_query($link, "SELECT * FROM `comments`");

        if (!$comments_result) {
            die("Query mislukt: " . mysqli_error($link));
        }
    ?>

    <p class="commentp">Geplaatste opmerkingen:</p>
    <table class="commenttable">
        <tr>
            <th style="padding: 10px;">Auteur</th>
            <th style="padding: 10px;">Opmerking</th>
        </tr>
        <?php
            //toont de opmerkingen
            while ($comment = mysqli_fetch_assoc($comments_result)) {
                echo "<tr>";
                echo "<td style='padding: 10px;'>" . htmlspecialchars($comment['Auteur']) . "</td>";
                echo "<td style='padding: 10px;'>" . htmlspecialchars($comment['Bericht']) . "</td>";
                echo "</tr>";
            }
        ?>
    </table>

    <div class="rode-balk"></div>
</body>
</html>