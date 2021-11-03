<?php
include 'header.php';

if(isset($_SESSION["username"]))  
{ 
    include 'config.php';

            $query ="SELECT * FROM Douglas_Contact";                
            $statement = $dbh->prepare($query);
            $statement->execute();
            $messages=$statement->fetchall();

?>
<center>
    <h1>Messages:</h1>

    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Email</th>
      <th scope="col">Numéro</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <?php

  foreach ($messages as $message){

  echo'
  <tbody>
    <tr>
      <th scope="row">'.$message[0].'</th>
      <td>'.$message[1].'</td>
      <td>'.$message[2].'</td>
      <td>'.$message[3].'</td>
      <td>'.$message[4].'</td>
    </tr>
  </tbody>
  ';
}
  ?>
</table>
</center>
<?php
}else{
   echo'You are not welcome';
   header('Location: http://'.$_SERVER['HTTP_HOST'].'/php/login.php');
}
?>
<a class="btn btn-info" href="disconnect.php">Disconnect</a>

</body>
</html>