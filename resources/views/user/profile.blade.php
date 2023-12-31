<!doctype html>
<html>
<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <main class="container">
            <div class="card-body text-center">
                <h1>Application: {{ $appName }}</h1>
                <h2>Profil</h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Peter</li>
                </ul>
            </div>
        </main>
    </div>
</body>
</html>
