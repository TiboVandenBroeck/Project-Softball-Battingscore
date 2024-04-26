<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Softball-battingscore</title>
    <link rel="stylesheet" href="CSS/seizoen-style.css">
    <script src="Scripts/script.js"></script>
</head>
<body>

    <?php
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
    ?>

    <h1 class="header">Wedstrijden 2023-2024</h1>
    <form method="post">
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
                        <button type="submit" name="leuven04-2024">Frontliners 2 Uit VS Leuven</button>
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
                        <button type="submit" name="frontlinersog04-2024">Frontliners 2 Uit VS Frontliners OG</button>
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
                        <button type="submit" name="borgerhoutsquirels04-2024">Frontliners 2 Thuis VS Borgerhout Squirels</button>
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
                        <button type="submit" name="afterburners03-2024">Frontliners 2 Thuis VS Heist Afterburners</button>
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
    </form>

    <div class="rode-balk"></div>    
</body>
</html>