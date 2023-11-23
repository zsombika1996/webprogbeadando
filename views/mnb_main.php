<h2>MNB napi árfolyamok</h2>
<table id="arfolyamok">
    <tr>
        <th>Pénznem</th>
        <th>Árfolyam (Ft)</th>
    </tr>
<?php
$i = 0;
foreach ($viewData['osszegek'] as $osszeg) {

    ?>
    <tr>
        <td><?php echo $viewData['penznemek'][$i]; ?></td>
        <td><?php echo $osszeg ?></td>
    </tr>
<?php
    $i++;
} ?>
</table>

<canvas id="myChart" width="400" height="400"></canvas>
<script>
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php
            foreach($viewData['penznemek'] as $p) {
                echo "'$p', ";
            }
        ?>],
        datasets: [{
            data: [<?php
                foreach ($viewData['osszegek'] as $osszeg) {
                        echo "$osszeg, ";
                }
            ?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>