<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Portfolio de Douglas Barlow</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light menu-center">
        <div class="container-fluid">
            <a href="#" class="logo">
                <img src="img/logo2.png" alt="logo">
            </a>    
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 left menu-center">
                  <li class="nav-item">
                    <a class="nav-link bold" aria-current="page" href="#presentation">Accueil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link bold" aria-current="page" href="#competences">Compétences</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link bold" aria-current="page" href="#realisations">Réalisations</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link bold" aria-current="page" href="contact.php">Contact</a>
                  </li>                                     
                </ul>          
              </div>
        </div>    
    </nav>
<main>
<div style="background: url(img/bg.jpg)" class="jumbotron bg-cover text-white">
    <a href="#" class="logo-intro">
        <img src="img/logo2.png" alt="logo">
    </a> 
</div> 
</main>
<div class="intro">
    <H1>Welcome</H1>
    <p>This is a shitty website I made, to show people that I need to be shot.</p>
    <p>I hope people never see this</p>
    <button type="button" class="btn btn-light">This is a button if you click on it, something should happens</button>
    <br>
    
    
<?php
    session_start();
    ini_set('display_errors', 1);
    echo $_SESSION["username"];
    if(isset($_SESSION["username"])){
        include 'realpage.php';
    }else{
        include 'login.php';
    }
?>
    </div> 
  </body>
</html>