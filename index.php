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
        <header>
            <div class="navigation flex-row justify-between align-center">
                <div class="logo">musichina <strong>inc.</strong></div>

                    <div class="nav flex-row align-center">
                        <div class="hamburger">
                        <span class="hamb"></span>
                        <span class="hamb"></span>
                        <span class="hamb"></span>
                    </div>

                    <div class="button">
                        <a href="https://open.spotify.com/user/1191979053?si=f36ae36388d84c63" target="_blank">Spotify</a>
                        <div class="anim-bg"></div>
                    </div>
                </div>
            </div>
        </header>

        <!-- title start -->
        <h1>Dischi obiettivamente molto belli che mi sentirei di consigliare</h1>
        <!-- title end -->

        <!-- Select start -->
        <section class="filters flex-row justify-center align-center">
            <h3 class="filter-title">Filtra per genere:</h3>
            <select name="genres" @change="filterByGenre">
                <option v-for="genre in genres" :value="genre">{{genre}}</option>
            </select>
        </section>
        <!-- Select end -->

        <!-- Main start -->
        <main>
            <!-- album container start -->
            <div class="albums flex-row">
                <!-- album item start -->
                <div class="item flex-row" v-for="album in albums">
                   <!-- image start -->
                    <img :src="album.poster" alt="album.title">
                    <div class="img-layover"></div>
                    <!-- image end -->

                    <!-- details start -->
                    <div class="album-details flex-row justify-between align-center">
                        <p class="p-details p-accent">{{album.title}}</p>

                        <p class="p-details">
                            <a href="#">{{album.artist}}</a>
                        </p>
                    </div>
                    <!-- details end -->
                </div>
                <!-- album item end -->
            </div>
            <!-- album container end -->
        </main>
        <!-- Main end -->
    </div>
    

    <!-- Script -->
    <script src="js/script.js">
    </script>
</body>
</html>