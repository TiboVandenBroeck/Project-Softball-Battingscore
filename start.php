<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Softball-battingscore</title>
    <link rel="stylesheet" href="CSS/start-style.css">
    <script src="Scripts/script.js"></script>
</head>
<body>

    <?php
        if(isset($_POST['spelerpag'])){
            header("Location: speler.php");
            exit;
        }

        if(isset($_POST['seizoenpag'])){
            $selectedOption = $_POST['seizoen'];
            switch ($selectedOption) {
                case '2021-2022':
                    header("Location: seizoen 21-22.php");
                    break;
                case '2022-2023':
                    header("Location: seizoen 22-23.php");
                    break;
                case '2023-2024':
                    header("Location: seizoen 23-24.php");
                    break;
            }
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

                <select name="seizoen" id="seizoen">
                    <option value="2021-2022">2021-2022</option>
                    <option value="2022-2023">2022-2023</option>
                    <option value="2023-2024">2023-2024</option>
                </select>

                <button type="submit" name="seizoenpag">Seizoen</button>
            </div>
            <div class="grid-item">

                <select name="reeks" id="reeks">
                    <option value="volvo">Gold</option>
                    <option value="volvo">Silver</option>
                </select>

                <button type="submit" name="reekspag">Reeks</button>
            </div>
            <div class="grid-item">
                <button type="submit" name="tornooipag">Tornooi</button>
            </div>
        </div>
    </form>

    <p class="p">Last played match: Frontliners 2 VS Leuven twins Gold</p>
    <br></br>
    <p class="p">Last update received: </p>
    <br></br>
    <p class="p" id="updatedtime"></p>

    <div class="rode-balk"></div>

</body>
</html>