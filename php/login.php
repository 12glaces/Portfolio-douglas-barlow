<?php 
include 'header.php';
echo"<br><br><br>";

try {

    if(isset($_POST["login"]))  
    {  

        include('config.php'); 

         if(empty($_POST["username"]) || empty($_POST["password"]))  
         {  
              $message = '<label>Veuillez remplir tous les champs</label>';  
         }  
         else  
         {  
              $pass_hash=md5($_POST['password']);

              $query = "SELECT * FROM Douglas_Login WHERE username = :username AND password_hash = :pass_hash";  
              
              $statement = $dbh->prepare($query);  
              $statement->execute(  
                   array(  
                        'username'     =>     $_POST["username"],  
                        'pass_hash'     =>     $pass_hash
                   )  
              );  
              $count = $statement->rowCount();  
              if($count > 0)  
              {  
                   $_SESSION["username"] = $_POST["username"];  
                   header("location:messages.php");  
              }  
              else  
              {  
                   $message = '<label>C’est incorrect, vérifiez le Pseudo et le Mot de passe saisis.</label>';  
              }  
         }  
    }  

}  
catch(PDOException $error)  
{  
    $message = $error->getMessage();  
}  
?>
<div class="container" style="width:500px;">  
   <?php  
   if(isset($message))  
   {  
        echo '<label class="text-danger">'.$message.'</label>';  
   }  
   ?>  
   <div>
   <h3 class="text-center text-info">Connexion</h3><br>  
   <form name="login" method="post" >  
      <label class="text-info">Pseudo</label>  
      <input type="text" name="username" class="form-control" />  
      <br>  
      <label class="text-info">Mot de passe</label>  
      <input type="password" name="password" class="form-control" />  
      <br>  
      <div class="text-center">
          <input type="submit" name="login" class="btn btn-success text-center" value="Se Connecter" />  
          <br>
      </div>
   </form> 
   </div> 
</div>
</center>  
</body>
</html>