<!DOCTYPE html>
<html lang="fr">
<head> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="portfolio douglas barlow informatique cv programmation">
    <title>Portfolio de Douglas Barlow</title>
    <link rel="shortcut icon" type="image/x-icon" href="../img/logo2.png" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
          <a href="https://douglas-barlow.com/" class="logo">
              <img src="../img/logo2.png" alt="logo">
          </a>          
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 left menu-right">
            <li class="nav-item">
              <a class="nav-link bold" aria-current="page" href=<?php echo "https://".$_SERVER['HTTP_HOST']."/#presentation";?>>Présentation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link bold" aria-current="page" href=<?php echo "https://".$_SERVER['HTTP_HOST']."/#competences";?>>Compétences</a>
            </li>
            <li class="nav-item">
              <a class="nav-link bold" aria-current="page" href=<?php echo "https://".$_SERVER['HTTP_HOST']."/#realisations";?>>Réalisations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link bold" aria-current="page" href="contact.php">Contact</a>
            </li>                                     
          </ul>          
        </div>
      </div>
    </nav>
    <center>
<?php
session_start();
?>