<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/style.css" rel="stylesheet">
    <title>LF Games</title>
</head>
<body>
<?php require '../requires/header.php'; ?>

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
                            <button class="btn btn-success" id="searchButton" type="submit">Search</button>
                        </span>
                </div>
            </div>
        </div>

        <div id="match-list" div class="col-md-4 m-auto"></div>      
</div>
</div>

    <script src="../views/main.js"></script>

</main>
<footer><?php require '../requires/footer.php'; ?></footer>

</body>
</html>