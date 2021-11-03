<br><br><br><br>
<?php
    include 'db.php';
    if(!empty($_POST)){
        if(!empty($_POST['username'])&&!empty($_POST['password'])){
            $user=$_POST['username'];
            $pass_hash=md5($_POST['password']);
            $sth = $dbh->prepare("SELECT username, password_hash FROM Douglas_Login where username=:username");
            $sth->bindValue(':username', $user);    
            $sth->execute();
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);
            if($result[0]['password_hash']==$pass_hash){
                $_SESSION["username"]=$user;
            }else{
                echo"<p style='color: #FF0000;'>Pas le bon Password fdp.</p>";
            }

        }else{
            echo"<p style='color: #FF0000;'>Veuillez remplir tous les champs.</p>";
        }
    }     
?>

<div style="width:400px" id="form-div" class="mx-auto">   
    <form action="" id="login" method="post" class="form-signin">
        <h1 class="h3 mb-3 font-weight-normal center">This is a login page</h1>
        <br>
        <input type="text" name="username" class="form-control" placeholder="Username">
        <br>
        <input type="password" name="password" class="form-control" placeholder="Password">  
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>                     
    </form> 
</div>  