<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Bootatrap-->
    <link rel="stylesheet" href="{{ url(mix('site/css/style.css')) }}"">
    <!--jQuery & Bootstrap-->
    <script src="{{ url(mix('site/js/scripts.js'))}}"></script>
    <!--Corpo da Pagina Principal-->
    <title>InfoFree</title>
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-azulclaro shadow">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="mx-auto">
                    <a class="navbar-brand display-1 text-white fs-2" href="#">InfoFree</a>
                </div>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="navbar-collapse">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                            </li>
                        </ul>
                    </div>
                    <div class="navbar-nav">
                        <button type="button" class="btn text-white">Login</button>
                        <button type="button" class="btn text-white">Inscrever</button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</body>
</html>