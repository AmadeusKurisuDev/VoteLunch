<?php
    $dbhost="localhost"; //indirizzo mysql
    $user="root";       //utente phpmyadmin
    $userpss="";         //password phpmyadmin
    $db="pranzo";          //Nome tabella phpmyadmin


    $conn=mysqli_connect($dbhost,$user,$userpss,$db);
    
    // verifica della connessione
    if (!$conn) {
        die("Connessione fallita: " . mysqli_connect_error());
    }
    // echo "Connessione riuscita!";

?>

