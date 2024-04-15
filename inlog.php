<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Softball-battingscore</title>
    <link rel="stylesheet" href="CSS/login-style.css">
    <script src="Python/script.js"></script>
</head>
<body>
    <h1 class="header">Welkom bij de Frontliners Statistieken pagina!</h1>
    <h2 class="header">Kies een login optie</h2>

    <br></br>
    <br></br>

    <div class="container">
        <div class="square">
            <label><b>Admin</b></label><br>
            <input type="text" placeholder="Voer gebruikersnaam in" name="adminnaam" required><br>

            <input type="password" placeholder="Voer wachtwoord in" name="adminwachtwoord" required><br>
            
            <button type="submit">Login</button>
        </div>

        <div class="square">
            <label><b>Temporary Key</b></label><br>
            <input type="text" placeholder="Voer Temporary Key in" name="Tempkey" required><br>

            <button type="submit">Login</button>
        </div>

        <div class="square">
            <label><b>Viewer</b></label><br>
            <button type="submit">Login</button>
        </div>
    </div>
</body>
</html>