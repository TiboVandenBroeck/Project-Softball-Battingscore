<?php
       
        if(isset($_POST['frontlinersog03-2023'])){
            header("Location: frontlinersog03-2023.php");
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
    <h1 class="header">Wedstrijden 2022-2023</h1>

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
        <div class="wrapper">
            <div class="grid-container">
                <div class="grid-item">
                    <div>
                        <p class="p">Wedstrijden:</p>
                    </div>
                </div>

                <div class="grid-item">
                    <div>
                        <p class="p">Score:</p>
                    </div>
                </div>

                <div class="grid-item">
                    <div>
                        <p class="p">Datum:</p>
                    </div>
                </div>
                <!-- FrontOG -->
                <div class="grid-item">
                    <div>
                        <button class="seizoenbtn" type="submit" name="frontlinersog03-2023">Frontliners 2 Thuis VS Frontliners OG</button>
                    </div>
                </div>

                <div class="grid-item">
                    <div>
                        <p class="p">15-5 en 12-3</p>
                    </div>
                </div>

                <div class="grid-item">
                    <div>
                        <p class="p">12/03/2023</p>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="rode-balk"></div>    
</body>
</html>