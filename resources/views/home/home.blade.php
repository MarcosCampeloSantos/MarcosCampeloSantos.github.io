<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--Script de Validação-->
        <script>
            function validar(){
                var senha = formCad.senha.value;
                var csenha = formCad.Csenha.value;

                if(csenha == senha){
                    formCad.submit();
                }
                else{
                    document.getElementById('alertasenha').style.display = 'block';
                }
            }
        </script>
        <!--Bootatrap-->
        <link rel="stylesheet" href="{{ url(mix('site/css/style.css')) }}">
        <!--jQuery & Bootstrap-->
        <script src="{{ url(mix('site/js/scripts.js'))}}"></script>
        <!--Corpo da Pagina Principal-->
        <title>InfoFree</title>
    </head>
    <body class="bg-azulclaro">
        <!--NavBar-->
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
                        <div class="navbar-nav gap-2">
                            <button type="button" class="text-white btn btn-azulclaro1" data-bs-toggle="modal" data-bs-target="#ModalLogin">Login</button>
                            <button type="button" class="text-white btn btn-azulclaro1" data-bs-toggle="modal" data-bs-target="#ModalInscrever">Inscrever</button>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!--Conteudo-->
        <div>
            <div class="container-fluid">
                <h1 class="text-center display-5 text-white">Conteudo</h1>
            </div>
            <div class="mx-auto w-75 bg-white rounded-3">
                <div class="pt-2">
                    <div class="card mb-3 mx-auto" style="max-width: 540px;">
                        <div class="row g-0">
                        <div class="col-md-4">
                            <img src="..." class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div>
                        <div class="card mb-3 mx-auto" style="max-width: 540px;">
                            <div class="row g-0">
                            <div class="col-md-4">
                                <img src="..." class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card mb-3 mx-auto" style="max-width: 540px;">
                            <div class="row g-0">
                            <div class="col-md-4">
                                <img src="..." class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
        <!--Modal Registro-->
        <div class="modal fade" data-bs-backdrop="static" id="ModalInscrever" tabindex="-1" aria-labelledby="ModalInscrever" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title display-4 text-center fs-1" id="ModalInscrever">Inscrever</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="bg-white rounded-3 mx-auto">
                        <div class="mx-auto">
                            <form action="cadastrar" method="POST" id="formCad">
                                @csrf
                                <div class="alert alert-vermelho" style="display: none" id="alertasenha" role="alert">
                                    Senhas não conferem!
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nome</label>
                                    <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="senha" name="senha">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="Csenha" name="Csenha">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-azulclaro1 text-white" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="button" onclick="validar()" class="btn btn-azulclaro1 text-white">Cadastrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
         <!--Modal Login-->
        <div class="modal fade" data-bs-backdrop="static" id="ModalLogin" tabindex="-1" aria-labelledby="ModalLogin" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title display-4 text-center fs-1" id="ModalLogin">Entrar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="bg-white rounded-3 mx-auto">
                        <div class="mx-auto">
                            <form action="/login" method="GET">
                                <div class="mb-3">
                                    <label for="InputEmail" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="InputPassword" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-azulclaro1 text-white" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-azulclaro1 text-white">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </body>
</html>