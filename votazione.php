<?php
    include("conn.php");
?>
<form method="POST">
        <select required name='scelta'>
            <?php
                $query="SELECT * FROM ristoranti";
                $ris=mysqli_query($conn, $query);
                while($row=mysqli_fetch_array($ris)){
                    echo "<option>".$row['nome']."</option>";
                }
            ?>
        </select>
        <button class="pulsante" type="submit">Invia</button>
    </form>
    <?php
        if(isset($_POST['scelta'])){
            $query="SELECT voti_tot FROM ristoranti WHERE nome='{$_POST['scelta']}'";
            $row=mysqli_fetch_array(mysqli_query($conn, $query));
            $temp=$row['voti_tot']+1;
            $query="UPDATE ristoranti SET voti_tot={$temp} where nome='{$_POST['scelta']}'";
            mysqli_query($conn, $query);
            echo '<h1>La tua opignione e stata ricevuta (non) con successo.</h1><p>Comunque non ci interessa di cosa tu penzi</p>';
        }
    ?>