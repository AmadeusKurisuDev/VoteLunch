<link rel="stylesheet" href="assets/css/app.css">
<?php
include("header.php");
    include_once("conn.php");
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<?php
    $nome = array();
    $listaVoti = array();
    $data = array();

    $query = "SELECT voti_tot, nome FROM ristoranti ORDER BY voti_tot DESC";

    $ris = mysqli_query($conn,$query);

    while($tot = mysqli_fetch_array($ris)){
        $data[$tot['nome']] = $tot['voti_tot'];
    }


    
?>
<center><canvas id="myChart"></canvas></center>

<script>
    // Recupero il canvas e lo salvo in una variabile
var ctx = document.getElementById('myChart').getContext('2d');

// Creo un array con i dati
var data = <?php echo json_encode($data); ?>;

// Imposto le etichette per il grafico
var labels = Object.keys(data);

// Imposto i dati per il grafico
var values = Object.values(data);

// Creo un oggetto dataset
var dataset = {
  label: 'Valori',
  data: values,
  backgroundColor: [
    'rgba(255, 99, 132, 0.2)',
    'rgba(54, 162, 235, 0.2)',
    'rgba(255, 206, 86, 0.2)',
    'rgba(75, 192, 192, 0.2)',
    'rgba(153, 102, 255, 0.2)',
    'rgba(255, 159, 64, 0.2)'
  ],
  borderColor: [
    'rgba(255, 99, 132, 1)',
    'rgba(54, 162, 235, 1)',
    'rgba(255, 206, 86, 1)',
    'rgba(75, 192, 192, 1)',
    'rgba(153, 102, 255, 1)',
    'rgba(255, 159, 64, 1)'
  ],
  borderWidth: 1
};

// Creo un array di dataset
var datasets = [dataset];

// Creo l'oggetto configurazione del grafico
var config = {
  type: 'doughnut',
  data: {
    labels: labels,
    datasets: datasets
  },
  options: {
    responsive: true,
    legend: {
      position: 'bottom'
    },
    title: {
      display: true,
      text: 'Grafico a torta'
    }
  }
};

// Creo un oggetto Chart e disegno il grafico
var myChart = new Chart(ctx, config);

</script>


<?php include("piedino.php");?>