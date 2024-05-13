<?php
    session_start();
    if(isset($_POST['verzend'])){
        header("Location: start.php");
        exit;
    }

    if (isset($_POST['adminlogin'])) {

        if (!empty($_POST['adminnaam']) && !empty($_POST['adminwachtwoord'])) {

            if ($_POST['adminnaam'] === "Tibo" && $_POST['adminwachtwoord'] === "Front") {

                $_SESSION["adminnaam"] = $_POST["adminnaam"];
                $_SESSION["adminwachtwoord"] = $_POST["adminwachtwoord"];
                header("Location: start.php");
                exit;
            } else {

                echo "Ongeldige gebruikersnaam of wachtwoord.";
            }
        } else {

            echo "Voer een gebruikersnaam en wachtwoord in.";
        }
    }
       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Softball-battingscore</title>
    <link rel="stylesheet" href="CSS/login-style.css">
</head>
<body>

    

    <h1 class="header">Welkom bij de Frontliners Statistieken pagina!</h1>
    <h2 class="header">Kies een login optie</h2>


    <br></br>
    <br></br>

    <div class="container">
        <form method="post">
            <div class="square">
                <label class="p"><b>Admin</b></label><br>
                <input type="text" placeholder="Voer gebruikersnaam in" name="adminnaam" required><br>
                <input type="password" placeholder="Voer wachtwoord in" name="adminwachtwoord" required><br>
                <button type="submit" name="adminlogin">Login</button>
            </div>
        </form>

        <form method="post">
            <div class="square">
                <label class="p"><b>Viewer</b></label><br>
                <button type="submit" name="verzend">Login</button>
            </div>
        </form>
        
    </div>
    <img class="logo" src="Images/Logo.png">

    
</body>
</html>