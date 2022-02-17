let app = new Vue({
    el: '#app',
    data:{
        arrayAlbums: [],
    }, 

    methods:{
        getAlbum(){               

            axios
                .get('http://localhost/php-ajax-dischi/Milestone2/database.php')
                .then((response) => {
                    this.arrayAlbums = (response.data);
                    console.log(this.arrayAlbums);
                })
                .catch((error) => {
                    console.log(error);
                })
        }
    },
    mounted: function(){
        this.getAlbum();
    }
})