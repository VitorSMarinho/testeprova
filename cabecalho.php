<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Provas.com</title>
  <link rel="stylesheet" href="./css/bootstrap-5.2.3-dist/css/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"> <img src="<?php
                                                  if (isset($logo) && !empty($logo)) {
                                                    echo $logo;
                                                  } else {
                                                    echo "img/testeti.jpg";
                                                  }
                                                  ?>" alt="testeonline" width="30" height="24">Teste_Online.com</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="alternativas.php">Testes Online</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</body>

</html>