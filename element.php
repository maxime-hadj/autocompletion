<?php
require 'game.php';
$element = new Game();
$elementGet = $element->getGame($_GET['id']);
//var_dump($elementGet);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <?php echo"<title>".$elementGet['0']['title']."</title>" ?>
</head>
<body>
<?php require 'header.php'; ?>

<main>
<div class="container" style="margin-top: 8%;">  
    <div class="row">
    <div id="logo" class="text-center">
        <h1>LF Games</h1><p>Your games library</p>
    </div>

        <div class="container mt-3">
            <div class="row">
                <div class="col-md-3 m-auto">
                    <input id="searchGames" type="text" 
                        name="searchGames" placeholder="Search for a game..." required
                    />
                        <span class="input-group-btn">
                            <button class="btn btn-success" type="submit">Search</button>
                        </span>
                </div>
            </div>
        </div>
<div id="match-list" div class="col-md-4 m-auto"></div>            
</div>
</div>

<article id="gameDisplay">
    <div>
        <?php 
            echo "<h1>".$elementGet['0']['title']."<h1>";
            echo "<h2>Genre: ".$elementGet['0']['genre']."<h2>";
            echo "<h3>Release year: ".$elementGet['0']['releasedate']."<h3>";
            echo "<p>Developped by: ".$elementGet['0']['developer']."<p>";
            echo "<p>Published by: ".$elementGet['0']['publisher']."<p>";
        ?>
    </div>
</article>

    <script src="main.js"></script>

    </main>
<?php require'footer.php'; ?>

</body>
</html>