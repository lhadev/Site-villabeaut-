<?php
       $server = "localhost";
       $dbname = "villabeaute";
       $user = 'root';
       $pass = '';
       
       $dsn="mysql:host=$server;dbname=$dbname;charset=utf8";

       try {
              //ouverture de la connexion
              $conn = new PDO($dsn, $user, $pass);
            }
            //en cas d'erreur on intercepte le code erreur et on le retourne
            catch(PDOException $except)
            {
              echo "Échec de la connexion",$except->getMessage();
              exit();
            }
       
?>