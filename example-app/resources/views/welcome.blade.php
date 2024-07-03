<h1>Welcome view</h1>
@vite('resources/js/app.js')

<script>
    document.addEventListener('DOMContentLoaded', function () {
        axios.get('/json').then(function(data) {
            console.log(data.data.name);
        });
    })
</script>