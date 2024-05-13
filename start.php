<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Softball-battingscore</title>
    <link rel="stylesheet" href="CSS/start-style.css">
</head>
<body>

    <?php
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

    <h1 class="header">Frontliners Statistieken</h1>
    <!-- surfbalk -->
    <form method="post">
        <div class="grid-container">
        <div class="grid-item">
                <button type="submit" name="home">Home</button>
            </div>
            <div class="grid-item">
                <button type="submit" name="spelerpag">Speler</button>
            </div>
            <div class="grid-item">

                <select name="seizoen" id="seizoen">
                    <option value="2022-2023">2022-2023</option>
                    <option value="2023-2024">2023-2024</option>
                </select>

                <button type="submit" name="seizoenpag">Seizoen</button>
            </div>
            <div class="grid-item">
                <button type="submit" name="adminpag">Admin</button>
            </div>
            <div class="grid-item">
                <button type="submit" name="Logout">Logout</button>
            </div>
        </div>
    </form>

    <img class="image" src="Images/Bats.png">



    <div class="rode-balk"></div>

</body>
</html>