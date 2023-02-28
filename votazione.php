<?php
    include("conn.php");

    $query="SELECT * FROM ristoranti";
    $ris=mysqli_query($conn, $query);
    while($row=mysqli_fetch_array($ris)){
        echo"<h1>".$row['nome']." = "."</h1>"
    }
?>