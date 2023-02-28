<?php
    include("conn.php");

    $query="SELECT * FROM es2";
    $ris=mysqli_query($conn, $query);
    while($setarray=mysqli_fetch_array($ris)){
        echo"<h1>".."</h1>"
    }
?>