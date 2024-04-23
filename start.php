<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Softball-battingscore</title>
    <link rel="stylesheet" href="CSS/start-style.css">
    <script src="Python/script.js"></script>
</head>
<body>

    <?php
        if(isset($_POST['spelerpag'])){
            header("Location: speler.php");
            exit;
        }

        if(isset($_POST['seizoenpag'])){
            header("Location: seizoen.php");
            exit;
        }

        if(isset($_POST['reekspag'])){
            header("Location: reeks.php");
            exit;
        }

        if(isset($_POST['tornooipag'])){
            header("Location: tornooi.php");
            exit;
        }
    ?>

    <h1 class="header">Frontliners Statistieken</h1>
    <form method="post">
        <div class="grid-container">
            <div class="grid-item">
                <button type="submit" name="spelerpag">Speler</button>
            </div>
            <div class="grid-item">
                <button type="submit" name="seizoenpag">Seizoen</button>
            </div>
            <div class="grid-item">
                <button type="submit" name="reekspag">Reeks</button>
            </div>
            <div class="grid-item">
                <button type="submit" name="tornooipag">Tornooi</button>
            </div>
        </div>
    </form>

    <div class="rode-balk"></div>
</body>
</html>