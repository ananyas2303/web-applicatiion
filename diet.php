<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NutroFit | Diet Plans</title>
    <link rel="stylesheet" href="dietplan_style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Audiowide&family=Exo+2:wght@300&family=Roboto+Mono:wght@100;400&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Audiowide&family=Exo+2:wght@300&family=Roboto+Mono&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Source+Code+Pro:wght@600&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Audiowide&family=Exo+2:wght@300&family=Roboto+Mono:wght@300;400&display=swap"
        rel="stylesheet">
    <script src="dietplan.js"></script>
</head>

<body>
    <div class="card-swiper">
        <img class="bg" src="BG7.jpg">
        <header class="head">
            <div class="logotext">
                <a href="home.html"><img class="logo" src="logo_i.png" alt="logo"></a>
                <div class="nf">
                    <h1>
                        NutroFit
                    </h1>
                </div>
            </div>
            <div class="allbuts">
                <nav>
                    <ul class="nav_links">
                        <li><a href="home.html">Home</a></li>
                        <li><a href="exercise_home.html">Exercises</a></li>
                        <li><a href="nutrition_home.html">Nutrition</a></li>
                        <li><a href="about.html">About</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <p class="text">
            DESCRIPTION OF ALL DIET PLANS
        </p>
        <div class="card-groups">
            <div class="card-group" data-index="0" data-status="active">
                <div class="big-card card">
                    <img src="balanced.png">
                </div>


            </div>
            <div class="card-group" data-index="1" data-status="unknown">

                <div class="big-card card">
                    <img src="weight_loss.png">
                </div>


            </div>
            <div class="card-group" data-index="2" data-status="unknown">

                <div class="big-card card">
                    <img src="muscle_gain.png">
                </div>


            </div>
            <div class="card-group" data-index="3" data-status="unknown">

                <div class="big-card card">
                    <img src="weight_gain.png">
                </div>

            </div>
        </div>
        <div class="card-swiper-buttons">
            <button id="left-button" onclick="handleLeftClick()">
                <img src="left-arrow.png">
            </button>
            <button id="love-button" onclick="handleRightClick()">
                <img src="right-arrow.png">
            </button>
        </div>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <div class="login">
                <input type="submit" name="submit" onclick="moreInfo()" value="Show more information" class="info">
            </div>
        </form>
        <div class="infobelow">
            <div class="mydiv" data-index="0" data-status="unknown">
                <p>-------------------------------info about balanced-------------------------------</p>
            </div>
            <div class="mydiv" data-index="1" data-status="unknown">
                <p>-------------------------------info about weight loss-------------------------------</p>
            </div>
            <div class="mydiv" data-index="2" data-status="unknown">
                <p>-------------------------------info about muscle gain-------------------------------</p>
            </div>
            <div class="mydiv" data-index="3" data-status="unknown">
                <p>-------------------------------info about weight gain-------------------------------</p>
            </div>
        </div>
    </div>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "nutrofit";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Error: " . mysqli_connect_error());
    }

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) 
        {
            header("Location:home.html");
        }
    ?>
    <br>
    <br>
    <br>
    <br>

</body>

</html>