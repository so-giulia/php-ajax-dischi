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
        <header>
            <div class="button"> <a href="#">Spotify</a> </div>    
            <h1>Dischi obiettivamente molto belli che mi sentirei di consigliare</h1>
        </header>
        <!-- Header end -->

        <!-- Select start -->
        <section class="filters">
            <select name="genres" @change="filterByGenre">
                <option v-for="genre in genres" :value="genre">{{genre}}</option>
                <option>test</option>
            </select>
        </section>
        <!-- Select end -->

        <!-- Main start -->
        <main>
            <!-- album container start -->
            <div class="albums flex-row">
                <!-- album item start -->
                <div class="item flex-row" v-for="album in albums">
                    <!-- album image start -->
                    <div class="img-col">
                        <img :src="album.poster" alt="album.title">
                    </div>
                    <!-- album image end -->
                        
                    <!-- album txt start -->
                    <div class="text-col flex-column justify-between">
                        <!-- Title + artist start -->
                        <div class="details-upper">
                            <h3 class="title">{{album.title}}</h3>

                            <p class="artist">
                                By <a href="#">{{album.artist}}</a>
                            </p>
                        </div>
                        <!-- Title + artist end -->

                        <!-- year start -->
                        <p class="year">{{album.year}}</p>
                        <!-- year end -->
                    </div>
                    <!-- album txt end -->
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