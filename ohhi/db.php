<?php
 $dsn = 'mysql:host=sql302.epizy.com;port=3306;dbname=epiz_29304690_douglasting';
 $user = 'epiz_29304690';
 $password = 'iZhnbVrYnn';
 $dbh = new PDO($dsn, $user, $password);
 $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
?>