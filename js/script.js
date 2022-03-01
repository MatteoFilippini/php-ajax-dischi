console.log('ok');

Vue.config.devtools = true;

const root = new Vue({
    el: '#root',
    data: {
        discs: [],
    },
    methods: {
        searchDisc() {
            axios.get('http://localhost/pomeriggio/php-ajax-dischi/includes/var.php').then(
                res => { this.discs = res.data; }
            ).catch(err => { console.log(err) });
        }
    },
    mounted() {
        this.searchDisc();
    }
})