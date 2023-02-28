<?php
    include("conn.php");
    if(isset($_GET['scelta']))echo '
        <h1 onclick=\'window.location="votazione.php";\'><svg width="40" height="40" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.7816 4.03157C12.0062 3.80702 12.0062 3.44295 11.7816 3.2184C11.5571 2.99385 11.193 2.99385 10.9685 3.2184L7.50005 6.68682L4.03164 3.2184C3.80708 2.99385 3.44301 2.99385 3.21846 3.2184C2.99391 3.44295 2.99391 3.80702 3.21846 4.03157L6.68688 7.49999L3.21846 10.9684C2.99391 11.193 2.99391 11.557 3.21846 11.7816C3.44301 12.0061 3.80708 12.0061 4.03164 11.7816L7.50005 8.31316L10.9685 11.7816C11.193 12.0061 11.5571 12.0061 11.7816 11.7816C12.0062 11.557 12.0062 11.193 11.7816 10.9684L8.31322 7.49999L11.7816 4.03157Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></h1>
        <h1>La tua opignione e stata ricevuta (non) con successo.</h1>
        <p>Comunque non ci interessa di cosa tu penzi</p>
        <a href="./risultati.php">vedi i risultati</a>
        <br><br><br><br><br><br><br><br><br>';
?>
<form method="POST">
    <?php
        $query="SELECT * FROM ristoranti";
        $ris=mysqli_query($conn, $query);
        while($row=mysqli_fetch_array($ris)){
            echo "<input id='".$row['id']."' name='scelta' type='radio' value='".$row['nome']."'/><label for='".$row['id']."'>".$row['nome']."</label><br>";
        }
    ?>
    <button class="pulsante" type="submit">Invia</button>
</form>
<?php
    if(isset($_POST['scelta'])){
        $query="SELECT voti_tot FROM ristoranti WHERE nome='{$_POST['scelta']}'";
        $row=mysqli_fetch_array(mysqli_query($conn, $query));
        $temp=$row['voti_tot']+1;
        $query="UPDATE ristoranti SET voti_tot={$temp} where nome='{$_POST['scelta']}'";
        mysqli_query($conn, $query);
        echo'<meta http-equiv="refresh" content="1; URL=votazione.php?scelta=p"/>';
    }
?>