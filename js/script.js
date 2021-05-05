var app = new Vue(
  {
    el: '#root',
    data:{
      albums: [],
      generi: [],
      selectGenere:''
    },
    mounted: function () {
      let self = this;
        axios.get('http://localhost:8888/php-ajax-dischi/api.php').then(function (response) {
          self.albums = response.data;
          self.albums.sort(function (a, b) {
            return a.year - b.year;
          });
          for (var i = 0; i < self.albums.length; i++) {
            if ( !self.generi.includes(self.albums[i].genre)){
              self.generi.push(self.albums[i].genre);
            }
          }
      });
    },
    methods:{
      genreFilter: function(genere){
          let self = this;
          if (genere != ''){
            axios.get('http://localhost:8888/php-ajax-dischi/api.php',{
            params: {
              genere: genere
            }
          }
          ).then(function (response) {
            self.albums = response.data;
            self.albums.sort(function (a, b) {
              return a.year - b.year;
            });
        });
        } else {
          axios.get('http://localhost:8888/php-ajax-dischi/api.php').then(function (response) {
          self.albums = response.data;
          self.albums.sort(function (a, b) {
            return a.year - b.year;
          });
      });
        }
      }
        
    }
  }
);
