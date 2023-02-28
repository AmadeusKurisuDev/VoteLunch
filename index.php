<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votazioni per pranzo dei 100 giorni</title>
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
                    echo"<option value=".$row['id'].">".$row['nome']."</option>"
                }
            ?>
        </select>
        <button class="pulsante" type="submit">Invia</button>
    </form>
    <?php
        if(isset($_POST['scelta'])){
            $query="SELECT voti_tot FROM ristoranti WHERE id='{$_POST['scelta']}'";
            $row=mysqli_fetch_array(mysqli_query($conn, $query));
            $temp=$row['voti_tot']+1;
            $query="UPDATE ristoranti SET voti_tot='{$temp}' where id='{$_POST['scelta']}'";
            mysqli_query($conn, $query);
        }
    ?>
</body>
</html>