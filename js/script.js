const app = new Vue(
    {
        el: '#app',
        data:{
            url: 'api/api-dischi.php',
            albums:''
        },
        mounted(){
            axios
                .get(this.url)
                .then(response =>{
                    this.albums = response.data;
                    console.log(this.albums);
                })
                .catch(error =>{
                    console.log(error);
                })
        },
    }
);