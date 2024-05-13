<?php
        session_start();
        //admin controle
        if(isset($_SESSION["adminnaam"]) && isset($_SESSION["adminwachtwoord"])) {
        } else {
            header("Location: start.php");
            exit;
        }
        
        if(isset($_POST['leuven04-2024'])){
            header("Location: leuven04-2024.php");
            exit;
        }

        if(isset($_POST['frontlinersog04-2024'])){
            header("Location: frontlinersog04-2024.php");
            exit;
        }

        if(isset($_POST['borgerhoutsquirels04-2024'])){
            header("Location: borgerhoutsquirels04-2024.php");
            exit;
        }

        if(isset($_POST['afterburners03-2024'])){
            header("Location: afterburners03-2024.php");
            exit;
        }
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
    <link rel="stylesheet" href="CSS/seizoen-style.css">    
</head>
<body>
    <h1 class="header">Wedstrijden 2023-2024</h1>

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

    <form method="post">
        <div class="wrapper24">
            <div class="grid-container">
                <div class="grid-item">
                    <div class="personlist">
                        <p class="p">Wedstrijden:</p>
                    </div>
                </div>

                <div class="grid-item">
                    <div class="personlist">
                        <p class="p">Score:</p>
                    </div>
                </div>

                <div class="grid-item">
                    <div class="personlist">
                        <p class="p">Datum:</p>
                    </div>
                </div>
                <!-- Leuven -->
                <div class="grid-item">
                    <div class="personlist">
                        <button class="seizoenbtn" type="submit" name="leuven04-2024">Frontliners 2 Uit VS Leuven</button>
                    </div>
                </div>

                <div class="grid-item">
                    <div class="personlist">
                        <p class="p">30-16 en 19-17</p>
                    </div>
                </div>

                <div class="grid-item">
                    <div class="personlist">
                        <p class="p">20/04/2024</p>
                    </div>
                </div>
                <!-- Frontliners OG -->
                <div class="grid-item">
                    <div class="personlist">
                        <button class="seizoenbtn" type="submit" name="frontlinersog04-2024">Frontliners 2 Uit VS Frontliners OG</button>
                    </div>
                </div>

                <div class="grid-item">
                    <div class="personlist">
                        <p class="p">18-10 en 5-6</p>
                    </div>
                </div>

                <div class="grid-item">
                    <div class="personlist">
                        <p class="p">13/04/2024</p>
                    </div>
                </div>
                <!-- Borgerhout Squirels -->
                <div class="grid-item">
                    <div class="personlist">
                        <button class="seizoenbtn" type="submit" name="borgerhoutsquirels04-2024">Frontliners 2 Thuis VS Borgerhout Squirels</button>
                    </div>
                </div>

                <div class="grid-item">
                    <div class="personlist">
                        <p class="p">9-3 en 3-5</p>
                    </div>
                </div>

                <div class="grid-item">
                    <div class="personlist">
                        <p class="p">1/04/2024</p>
                    </div>
                </div>
                <!-- Afterburners Heist -->
                <div class="grid-item">
                    <div class="personlist">
                        <button class="seizoenbtn" type="submit" name="afterburners03-2024">Frontliners 2 Thuis VS Heist Afterburners</button>
                    </div>
                </div>

                <div class="grid-item">
                    <div class="personlist">
                        <p class="p">24-2 en 15-5</p>
                    </div>
                </div>

                <div class="grid-item">
                    <div class="personlist">
                        <p class="p">30/03/2024</p>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="rode-balk"></div>    
</body>
</html>