<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>

    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Dischi con Vue</title>
</head>
<body>
    <div id="app">
        <!-- Header start -->
        <header class="flex-row justify-between">
            <h1>Ascolti Recenti <br>Spotify</h1>

            <nav>
                <ul class="flex-row">
                    <li><a href="#">Generi,</a></li>
                    <li><a href="#">Playlist</a></li>
                    </ul>
            </nav>        
        </header>
        <!-- Header end -->

        <!-- Main start -->
        <main>
            <div class="albums flex-row">
                <?php // foreach($albums as $item){ ?>
                    
                    <!-- album item start -->
                    <div class="item flex-row">
                        <!-- album image -->
                        <div class="img-col">
                            <img src="<?php // echo $item['poster'] ?>" alt="<?php // echo $item['title'] ?>">
                        </div>
                        

                        <!-- album txt start -->
                        <div class="text-col flex-column justify-between">
                            <!-- Title + artist start -->
                            <div class="details-upper">
                                <h3 class="title"><?php // echo $item['title'] ?></h3>
                                <p class="artist">
                                    By
                                    <a href="#">
                                        <?php // echo $item['artist'] ?>
                                    </a>
                                </p>
                            </div>
                            <!-- Title + artist end -->

                            <!-- year start -->
                            <p class="year"><?php // echo $item['year'] ?></p>
                            <!-- year end -->
                        </div>
                        <!-- album txt end -->
                    </div>
                    <!-- album item end -->

                <?php // } ?>
            </div>
        </main>
        <!-- Main end -->
    </div>
    


    <!-- Script -->
    <script src="js/script.js">
    </script>
</body>
</html>