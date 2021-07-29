const app = new Vue(
    {
        el: '#app',
        data:{
            url: 'api/api-dischi.php',
            albums:[],
            support: [],
            genres: ['tutti i generi'],
            userIsFiltering: false
        },
        mounted(){
            axios
                .get(this.url)
                .then(response =>{
                    //get albums
                    this.albums = response.data;
                    this.support = response.data;

                    // get genres
                    this.albums.forEach(items => {
                        items.genres.forEach(genre => {
                            if(!this.genres.includes(genre)){
                                this.genres.push(genre);
                            }
                        });
                    });
                })
                .catch(error =>{
                    console.log(error);
                })
        },
        methods: {
            filterByGenre(e){
                this.albums = [];
                
                if(e.target.value != 'tutti i generi'){
                    this.support.filter(item => {
                        if(item.genres.includes(e.target.value)){
                            this.albums.push(item);
                        }
                    });
                }
            }
        }
    }
);