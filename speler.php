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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Softball-battingscore</title>
    <link rel="stylesheet" href="CSS/speler-style.css">
</head>
<body>
    <h1 class="header">Spelers</h1>

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

    <div class="grid-container" id="grid-container">
            <div class="grid-item">
                <div class="personlist">
                    <img class="image" src="Images/Adhemar_Couwet.JPG" alt="Adhemar Couwet">
                    <p class="p">Lid van: 2015</p>
                    <button class="spelerbutton" type="button" name="Naam" onclick="window.location.href = 'Speler%20pagina\'s/adhemar_couwet.php';">Adhemar Couwet</button>
                </div>
            </div>

            <div class="grid-item">
                <div class="personlist">
                    <img class="image" src="Images/Luka_Decorte.JPG" alt="Luka Decorte">
                    <p class="p">Lid van: 2014</p>
                    <button class="spelerbutton" type="button" name="Naam" onclick="window.location.href = 'Speler%20pagina\'s/luka_decorte.php';">Luka Decorte</button>
                </div>
            </div>

            <div class="grid-item">
                <div class="personlist">
                    <img class="image" src="Images/Dieter_Decorte.JPG" alt="Dieter Decorte">
                    <p class="p">Lid van: 2016</p>
                    <button class="spelerbutton" type="button" name="Naam" onclick="window.location.href = 'Speler%20pagina\'s/dieter_decorte.php';">Dieter Decorte</button>
                </div>
            </div>

            <div class="grid-item">
                <div class="personlist">
                    <img class="image" src="Images/Ariane_Couwet.JPG" alt="Ariane Couwet">
                    <p class="p">Lid van: 2021</p>
                    <button class="spelerbutton" type="button" name="Naam" onclick="window.location.href = 'Speler%20pagina\'s/ariane_couwet.php';">Ariane Couwet</button>
                </div>
            </div>

            <div class="grid-item">
                <div class="personlist">
                    <img class="image" src="Images/Chiel_Callens.JPG" alt="Chiel Callens">
                    <p class="p">Lid van: 2014</p>
                    <button class="spelerbutton" type="button" name="Naam" onclick="window.location.href = 'Speler%20pagina\'s/chiel_callens.php';">Chiel Callens</button>
                </div>
            </div>

            <div class="grid-item">
                <div class="personlist">
                    <img class="image" src="Images/Eline_Vanneste.JPG" alt="Eline Vanneste">
                    <p class="p">Lid van: 2022</p>
                    <button class="spelerbutton" type="button" name="Naam" onclick="window.location.href = 'Speler%20pagina\'s/eline_vanneste.php';">Eline Vanneste</button>
                </div>
            </div>

            <div class="grid-item">
                <div class="personlist">
                    <img class="image" src="Images/Elise_Hautekeur.JPG" alt="Elise Hautekeur">
                    <p class="p">Lid van: 2014</p>
                    <button class="spelerbutton" type="button" name="Naam" onclick="window.location.href = 'Speler%20pagina\'s/elise_hautekeur.php';">Elise Hautekeur</button>
                </div>
            </div>

            <div class="grid-item">
                <div class="personlist">
                    <img class="image" src="Images/Emiel_Kerckhof.JPG" alt="Emiel Kerckhof">
                    <p class="p">Lid van: 2016</p>
                    <button class="spelerbutton" type="button" name="Naam" onclick="window.location.href = 'Speler%20pagina\'s/emiel_kerckhof.php';">Emiel Kerckhof</button>
                </div>
            </div>

            <div class="grid-item">
                <div class="personlist">
                    <img class="image" src="Images/Geoffrey_Andries.JPG" alt="Geoffrey Andries">
                    <p class="p">Lid van: 2010</p>
                    <button class="spelerbutton" type="button" name="Naam" onclick="window.location.href = 'Speler%20pagina\'s/geoffrey_andries.php';">Geoffrey Andries</button>
                </div>
            </div>

            <div class="grid-item">
                <div class="personlist">
                    <img class="image" src="Images/Josephine_Berten.JPG" alt="Josephine Berten">
                    <p class="p">Lid van: 2015</p>
                    <button class="spelerbutton" type="button" name="Naam" onclick="window.location.href = 'Speler%20pagina\'s/josephine_berten.php';">Josephine Berten</button>
                </div>
            </div>

            <div class="grid-item">
                <div class="personlist">
                    <img class="image" src="Images/Julie_Kerckhof.JPG" alt="Julie Kerckhof">
                    <p class="p">Lid van: 2013</p>
                    <button class="spelerbutton" type="button" name="Naam" onclick="window.location.href = 'Speler%20pagina\'s/julie_kerckhof.php';">Julie Kerckhof</button>
                </div>
            </div>

            <div class="grid-item">
                <div class="personlist">
                    <img class="image" src="Images/Kaily_Blanckaert.JPG" alt="Kaily Blanckaert">
                    <p class="p">Lid van: 2013</p>
                    <button class="spelerbutton" type="button" name="Naam" onclick="window.location.href = 'Speler%20pagina\'s/kaily_blanckaert.php';">Kaily Blanckaert</button>
                </div>
            </div>

            <div class="grid-item">
                <div class="personlist">
                    <img class="image" src="Images/Marie_Parret.JPG" alt="Marie Parret">
                    <p class="p">Lid van: 2016</p>
                    <button class="spelerbutton" type="button" name="Naam" onclick="window.location.href = 'Speler%20pagina\'s/marie_parret.php';">Marie Parret</button>
                </div>
            </div>

            <div class="grid-item">
                <div class="personlist">
                    <img class="image" src="Images/Ruben_Ravestyn.JPG" alt="Ruben Ravestyn">
                    <p class="p">Lid van: 2012</p>
                    <button class="spelerbutton" type="button" name="Naam" onclick="window.location.href = 'Speler%20pagina\'s/ruben_ravestyn.php';">Ruben Ravestyn</button>
                </div>
            </div>

            <div class="grid-item">
                <div class="personlist">
                    <img class="image" src="Images/Tibo_Vanden_Broeck.JPG" alt="Tibo Vanden Broeck">
                    <p class="p">Lid van: 2014</p>
                    <button class="spelerbutton" type="button" name="Naam" onclick="window.location.href = 'Speler%20pagina\'s/tibo_vanden_broeck.php';">Tibo Vanden Broeck</button>
                </div>
            </div>
        </div>
    </div>

<div class="rode-balk"></div>

<script>
    
    //spelers worden gesorteerd via naam
    var gridContainer = document.getElementById('grid-container');
    var gridItems = Array.from(gridContainer.getElementsByClassName('grid-item'));

    gridItems.sort(function(a, b) {
        var nameA = a.querySelector('button').innerText.toUpperCase();
        var nameB = b.querySelector('button').innerText.toUpperCase();
        if (nameA < nameB) {
            return -1;
        }
        if (nameA > nameB) {
            return 1;
        }
            return 0;
        });

    gridItems.forEach(function(item) {
    gridContainer.appendChild(item);
    });

</script>

</body>
</html>