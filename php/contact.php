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
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link href="css/styles.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="portfolio douglas barlow informatique cv programmation">
    <title>Portfolio de Douglas Barlow</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo2.png" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
          <a href="https://douglas-barlow.com/" class="logo">
              <img src="img/logo2.png" alt="logo">
          </a>          
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 left menu-right">
            <li class="nav-item">
              <a class="nav-link bold" aria-current="page" href="https://douglas-barlow.com/#presentation">Présentation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link bold" aria-current="page" href="https://douglas-barlow.com/#competences">Compétences</a>
            </li>
            <li class="nav-item">
              <a class="nav-link bold" aria-current="page" href="https://douglas-barlow.com/#realisations">Réalisations</a>
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
    include 'php/config.php';
    if(!empty($_POST)){
        if(!empty($_POST['name'])&&!empty($_POST['fname'])&&!empty($_POST['email'])&&!empty($_POST['phone'])&&!empty($_POST['message'])){
            $name=$_POST['name'];
            $fname=$_POST['fname'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $message=$_POST['message'];
            $statement = $dbh->prepare('INSERT INTO Douglas_Contact(Nom, Prenom, Email, Phone, Message, id) VALUES (:name,:fname,:email,:phone,:message,"")');
            $statement->bindValue(':name', $name);
            $statement->bindValue(':fname', $fname);
            $statement->bindValue(':email', $email);
            $statement->bindValue(':phone', $phone);
            $statement->bindValue(':message', $message);                
            $statement->execute();
            echo"<p style='color: #00FF00;'>Message bien envoyé.</p>";         
        }else{
            echo"<p style='color: #FF0000;'>Veuillez remplir tous les champs.</p>";
        }
    }     
?>

<div class="container">  
    <form class="form-horizontal" method="post">
        <fieldset>
            <legend class="text-center header">Contactez moi</legend>
            
            <p>Veuillez remplir tous les champs.</p>
            <div class="form-group">
                <span class="text-center"><i class="fa fa-user bigicon"></i></span>
                <div class="col-md-8">
                    <input id="lname" name="name" type="text" placeholder="Prénom" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <span class="text-center"><i class="fa fa-user bigicon"></i></span>
                <div class="col-md-8">
                    <input id="fname" name="fname" type="text" placeholder="Nom" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <span class="text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                <div class="col-md-8">
                    <input id="email" name="email" type="text" placeholder="Email" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <span class="text-center"><i class="fa fa-phone-square bigicon"></i></span>
                <div class="col-md-8">
                    <input id="phone" name="phone" type="text" placeholder="Numéro" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <span class="text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                <div class="col-md-8">
                    <textarea class="form-control" id="message" name="message" placeholder="Votre message" rows="7"></textarea>
                </div>
            </div>
<br>
            <div class="form-group">
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                    <p class="font-italic mb-0">Vous pouvez également me contacter par email d.barlow@laposte.net </p>       
                </div>
            </div>
            </center>
        </fieldset>
    </form>           
    
</div>
</body>
</html>