<?php
    session_start();


    if(isset($_SESSION["adminnaam"]) && isset($_SESSION["adminwachtwoord"])) {
    } else {
        header("Location: start.php");
        exit;
    }

    $link = mysqli_connect("localhost", "root", "", "project softball-battingscore");

    if (!$link) {
        die("Verbinding mislukt: " . mysqli_connect_error());
    }

    $comments_result = mysqli_query($link, "SELECT * FROM `comments`");

    if (!$comments_result) {
        die("Query mislukt: " . mysqli_error($link));
    }

    if(isset($_POST['delete_comment'])) {
        $comment_id = $_POST['comment_id'];
        $delete_query = "DELETE FROM `comments` WHERE id = $comment_id";
        mysqli_query($link, $delete_query);

        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
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
    <link rel="stylesheet" href="CSS/admin-style.css">
</head>
<body>
    <h1 class="header">Admin</h1>

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

    <br></br>

    <table class="admintable">
    <tr>
        <th>Auteur</th>
        <th>Opmerking</th>
        <th>Actie</th>
    </tr>

    <?php
    while ($comment = mysqli_fetch_assoc($comments_result)) {
        echo "<tr>";
        echo "<td style='padding: 10px;'>" . htmlspecialchars($comment['Auteur']) . "</td>";
        echo "<td style='padding: 10px;'>" . htmlspecialchars($comment['Bericht']) . "</td>";
        echo "<td style='padding: 10px;'><form action='' method='post'><input type='hidden' name='comment_id' value='" . $comment['id'] . "'><input class='commentbtn' type='submit' name='delete_comment' value='Verwijder'></form></td>";
        echo "</tr>";
    }
    ?>
</table>

    <div class="rode-balk"></div> 
</body>
</html>
