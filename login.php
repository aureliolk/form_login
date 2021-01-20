<?php session_start()?>
<!doctype html>
<html lang="pt_BR">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/custom.css">
    <title>Pagina de Formulario</title>
</head>

<body class="text-center">
    <!-- Parte do Cabeçalho -->
    <header>

    </header>
    <!-- Parte do Corpo -->
    <main class="form-signin">
        <form method="POST">
            <img class="mb-4 img-fluid" src="./assets/img/logoAcosGlobal.png" alt="">
            <h1 class="h3 mb-3 fw-normal">Faça seu Loguin</h1>

            <input type="text" id="inputUser" name="user" class="form-control" placeholder="Digite: aureliolk" required autofocus>
            <input type="password" id="inputPass" name="pass" class="form-control" placeholder="Digite: 14253" required="">
            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> Lembre-me
              </label>
            </div>
            <input type="submit" name="Send" value="Send" class="w-100 btn btn-lg btn-primary">
            <!-- <button class="w-100 btn btn-lg btn-primary" type="submit" name="send">Entrar</button> -->
            <p class="mt-5 mb-3 text-muted">© 2021-Acos Service</p>
          </form>
    </main>
    <!-- Parte do Radape -->
    <footer>

    </footer>
    <!-- Importação dos Script BootStrap CDN/LOCAL/CUSTOM  -->
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="./assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="./assets/js/custom.js"></script>
</body>

</html>