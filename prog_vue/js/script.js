Vue.config.devtools = true

const app = new Vue({
    el: '#root',
    data: {
        discs: [],
        genres: [],
        filteredDiscs: []
    },
    mounted() {
        axios.get('../prog_php/api/discs.php')
        .then((res)=>{
            this.discs = res.data
            this.fetchGenres()
        })
    },
    methods: {
        fetchGenres() {
            this.discs.forEach(disc => {
                if(!this.genres.includes(disc.genre)) this.genres.push(disc.genre)
            });
            return this.genres
        },
    }
})