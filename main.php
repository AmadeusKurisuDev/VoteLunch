<div class="votitot">
    <?php
    include("conn.php");

    $query = "SELECT voti_tot, nome FROM ristoranti";
    $ris = mysqli_query($conn,$query);
    $nome = [];
    $voti = [];
    while($tot = mysqli_fetch_array($ris)){
        $nome[] = $tot['nome'];
        $voti[] = $tot['voti_tot'];
    }
    
    ?>

    <script>
        const DATA_COUNT = 5;
        const NUMBER_CFG = <?php json_encode($voti) ?>;

        const data = {
        labels: <?php json_encode($nome) ?>,
        datasets: [
            {
            label: 'Dataset 1',
            data: Utils.numbers(NUMBER_CFG),
            backgroundColor: Object.values(Utils.CHART_COLORS),
            }
        ]
        };
        const config = {
        type: 'doughnut',
        data: data,
        options: {
            responsive: true,
            plugins: {
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Chart.js Doughnut Chart'
            }
            }
        },
        };
    </script>
</div>