<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
    <title>Vue Dischi Musicali</title>
  </head>
  <body>
    <div class="wrapper">
      <header>
        <img src="img/download.png" alt="">
      </header>
      <div id="root">
        <select class="generi" name="generi"  v-model='selectGenere' @change="genreFilter(selectGenere)">
          <option value="" >Nessuna scelta</option>
          <option v-bind:value="genere" v-for="genere in generi">{{genere}}</option>
        </select>
        <div class="container-albums">
          <div class="album" v-for="album in albums" >
            <img :src="album.poster" alt="album.title">
            <h3>{{ album.title }}</h3>
            <span class="author">{{ album.author }}</span>
            <span class="year">{{ album.year }}</span>
          </div>
        </div>

      </div>
    </div>

    <script src="js/script.js" charset="utf-8"></script>
  </body>
</html>
