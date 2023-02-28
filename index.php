<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    include("conn.php");
?>
<body>
    <form method="POST">
        <select>
            <?php
                $query="SELECT * FROM ristoranti";
                $ris=mysqli_query($conn, $query);
                while($row=mysqli_fetch_array($ris)){
                    echo"<option>".$row['nome']."</option>"
                }
            ?>
        </select>
    </form>
</body>
</html>