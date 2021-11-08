<?php 
    include 'header.php';
    include 'config.php';
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