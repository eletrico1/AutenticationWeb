<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The page supports both dark and light color schemes,
         and the page author prefers / default is light. -->
    <meta name="color-scheme" content="light dark">

    <!-- If `prefers-color-scheme` is not supported, fall back to light mode.
         In this case, inject the `light` CSS before the others, with
         no media filter so that it will be downloaded with highest priority. -->
    <script>
      if (window.matchMedia("(prefers-color-scheme: dark)").media === "not all") {
        document.documentElement.style.display = "none";
        document.head.insertAdjacentHTML(
          "beforeend",
          "<link id=\"css\" rel=\"stylesheet\" href=\"../dist/css/bootstrap.css\" onload=\"document.documentElement.style.display = ''\">"
        );
      }
    </script>
    <!-- Load the alternate CSS first ...
         in this case the Bootstrap-Dark Variant CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-dark-5@1.1.3/dist/css/bootstrap-night.min.css" rel="stylesheet" media="(prefers-color-scheme: dark)">
    <!-- and then the primary CSS last ...
         in this case the (original) Bootstrap Variant CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-dark-5@1.1.3/dist/css/bootstrap.min.css" rel="stylesheet" media="(prefers-color-scheme: light)">

    <title>Hello, world!</title>
  </head>
  <body>
   <!-- navbar -->
   <nav class="navbar navbar-expand-lg bg-body-tertiary " >
            <div class="container-fluid">
                <a class="navbar-brand" href="#">AutenticationSystem</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                   </button>
                     <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                     <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="#">Admin Panel</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                 </li>
                <li class ="nav-item">
                <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
        <label class="form-check-label" for="flexSwitchCheckDefault">Dark-Mode</label>
        </div>
    </li>
</ul>
</div</div>
        </nav>
        <!-- form container login-->
        <div style="height: 60%; margin-top: 10%;">
        <div class="container-sm">
            <form action="../AutenticationWeb/app/functions/loginValidate.php" method="post">
                <h1>Faça o Login Abaixo </h1>
                <input class="form-control" type="text"  id="email" name="email" placeholder="Email" aria-label="default input example">
                <br>
                <input class="form-control" type="text"  id="senha" name="senha" placeholder="Senha" aria-label="default input example">
                <br>
                <button type="submit" class="btn btn-success btn-lg" value="enviar" name="enviar">Entrar</button>
        </div>
        </div>
        <!-- footer -->
        <footer class="bg-dark text-center text-lg-start">
            <!-- Copyright -->
            <div style="width: 100%; position: fixed; bottom: 0;">
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                  © 2023 Copyright
                <a class="text-dark" href="#">Todos Direitos Reservados</a>
            </div>
        </div>
         <!-- Copyright -->
        </footer>
    <!-- Optional Bootstrap JavaScript -->
    <script src="location/of/the/bootstrap.js/here"></script>
  </body>
</html>