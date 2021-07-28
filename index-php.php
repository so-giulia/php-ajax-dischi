<?php include 'data.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Php Ajax Dischi</title>
</head>
<body>
    <header class="flex-row justify-between">
        <h1>Ascolti recenti <br>da Spotify</h1>

        <nav>
            <ul class="flex-row">
                <li><a href="#">Generi,</a></li>
                <li><a href="#">Playlist</a></li>
            </ul>
        </nav>        
    </header>

    <main>
        <div class="albums flex-row">
            <?php foreach($albums as $item){ ?>
                <div class="item">
                    hey
                </div>
            <?php } ?>
        </div>
    </main>
</body>
</html>