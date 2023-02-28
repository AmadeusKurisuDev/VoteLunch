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
        <select required nane='scelta'>
            <?php
                $query="SELECT * FROM ristoranti";
                $ris=mysqli_query($conn, $query);
                while($row=mysqli_fetch_array($ris)){
                    echo"<option>".$row['nome']."</option>"
                }
            ?>
        </select>
        <button class="pulsante" type="submit">Invia</button>
    </form>
    <?php
        if(isset($_POST['scelta'])){
            
        }
    ?>
</body>
</html>