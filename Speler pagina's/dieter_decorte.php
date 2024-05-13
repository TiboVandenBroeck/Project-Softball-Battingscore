<?php
    if(isset($_POST['home'])){
        header("Location: ../start.php");
        exit;
    }

    if(isset($_POST['spelerpag'])){
        header("Location: ../speler.php");
        exit;
    }

    if(isset($_POST['seizoenpag'])){
        $selectedOption = $_POST['seizoen'];
        switch ($selectedOption) {
            case '2022-2023':
                header("Location: ../seizoen 22-23.php");
                break;
            case '2023-2024':
                header("Location: ../seizoen 23-24.php");
                break;
        }
        exit;
    }

    if(isset($_POST['adminpag'])){
        header("Location: ../admin.php");
        exit;
    }

    if(isset($_POST['Logout'])){
        header("Location: ../logout.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/persoonlijkepagina-style.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="../Scripts/dieter_decorte_chart.js"></script>
</head>
<body>

    <h1 class="header">Persoonlijke Pagina</h1>
    
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

    <div class="container">
            <div class="personlist">
                <img class="image" src="../Images/Dieter_Decorte.JPG" alt="Dieter Decorte">
            </div>
            
        <div class="chart-container">
            <div id="chart_div" style="width: 100%; height: 400px;"></div>
        </div>
    </div>


    <div class="grid-container">
        <div class="grid-item">Dieter Decorte</div>
        <div class="grid-item">Seizoen Statisiek:</div>
        
        <div class="grid-item">AVG = 0,818</div>
        <div class="grid-item">19/09/2004</div>

        <div class="grid-item"><button class="custom-button" type="button" name="Seizoen" onclick="window.location.href = '../seizoen 23-24.php';">2023-2024</button></div>
        <div class="grid-item">OPS = 2,386</div>
        
        <div class="grid-item">Lid van: 2016</div>
        <div class="grid-item">Gold</div>
        
        <div class="grid-item">SLG = 1,636</div>
        
        <div class="grid-item"></div>
        
        <div class="grid-item"></div>
        <div class="grid-item">OBP = 0,75</div>      
    </div>


    <div class="rode-balk"></div>
</body>
</html>