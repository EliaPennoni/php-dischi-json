<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Dischi</title>
</head>

<body>
    <main id="app">
        <h1>
            Dischi
        </h1>
        <div class="cards">
            <div v-for="song in music" class="card">
                <div class="img">
                    <img :src="song.poster" alt="">
                </div>
                <h2>
                    {{song.author}}
                </h2>
                <h2>
                    {{song.title}}
                </h2>
                <h2>
                    {{song.year}}
                </h2>
                <h2>
                    {{song.genre}}
                </h2>
            </div>

        </div>
    </main>

    <!-- vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- js -->
    <script src="js/scripts.js"></script>

</body>

</html>