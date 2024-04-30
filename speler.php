<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Softball-battingscore</title>
    <link rel="stylesheet" href="CSS/speler-style.css">
    <script src="Scripts/script.js"></script>
</head>
<body>
    <h1 class="header">Frontliners Statistieken</h1>
    <h2 class="header">Spelers:</h2>

    <!-- searchbar toevoegen -->
    <!-- <label for="search">Zoek spelers:</label> -->
    <!-- <input type="search" id="search" data-search> -->

    

    <div class="grid-container" id="grid-container">
            <div class="grid-item">
                <div class="personlist">
                    <img class="image" src="Images/Meme_Man.png" alt="Persoon1">
                    <p class="p">Lid van: XX</p>
                    <button type="button" name="Naam" onclick="window.location.href = 'Speler%20pagina\'s/adhemar_couwet.php';">Adhemar Couwet</button>
                </div>
            </div>

            <div class="grid-item">
                <div class="personlist">
                    <img class="image" src="Images/Meme_Man.png" alt="Persoon2">
                    <p class="p">Lid van: XX</p>
                    <button type="button" name="Naam" onclick="window.location.href = 'Speler%20pagina\'s/luka_decorte.php';">Luka Decorte</button>
                </div>
            </div>

            <div class="grid-item">
                <div class="personlist">
                    <img class="image" src="Images/Meme_Man.png" alt="Persoon3">
                    <p class="p">Lid van: XX</p>
                    <button type="button" name="Naam" onclick="window.location.href = 'Speler%20pagina\'s/dieter_decorte.php';">Dieter Decorte</button>
                </div>
            </div>

            <div class="grid-item">
                <div class="personlist">
                    <img class="image" src="Images/Meme_Man.png" alt="Persoon4">
                    <p class="p">Lid van: XX</p>
                    <button type="submit" name="Naam">Naam Persoon4</button>
                </div>
            </div>

            <div class="grid-item">
                <div class="personlist">
                    <img class="image" src="Images/Meme_Man.png" alt="Persoon5">
                    <p class="p">Lid van: XX</p>
                    <button type="submit" name="Naam">Naam Persoon5</button>
                </div>
            </div>

            <div class="grid-item">
                <div class="personlist">
                    <img class="image" src="Images/Meme_Man.png" alt="Persoon6">
                    <p class="p">Lid van: XX</p>
                    <button type="submit" name="Naam">Naam Persoon6</button>
                </div>
            </div>

            <div class="grid-item">
                <div class="personlist">
                    <img class="image" src="Images/Meme_Man.png" alt="Persoon7">
                    <p class="p">Lid van: XX</p>
                    <button type="submit" name="Naam">Naam Persoon7</button>
                </div>
            </div>

            <div class="grid-item">
                <div class="personlist">
                    <img class="image" src="Images/Meme_Man.png" alt="Persoon8">
                    <p class="p">Lid van: XX</p>
                    <button type="submit" name="Naam">Naam Persoon8</button>
                </div>
            </div>
        </div>
    </div>

<div class="rode-balk"></div>


<!-- sortering van spelers maar moet nog uitvogelen hoe doen via extern script -->
<script>
        // JavaScript om de grid-items alfabetisch te sorteren op basis van de tekst in de knoppen
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