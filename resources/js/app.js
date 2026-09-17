import Chart from 'chart.js/auto';

new Chart(document.getElementById('chart1'), {
    type: 'bar',

    data: {
        labels: ['Jan', 'Fév', 'Mars', 'Avril'],
        datasets: [{
            label: 'Ventes',
            data: [12, 19, 8, 15]
        }]
    }
});

new Chart(document.getElementById('chart2'), {
    type: 'line',

    data: {
        labels: ['Jan', 'Fév', 'Mars', 'Avril'],
        datasets: [{
            label: 'Utilisateurs',
            data: [10, 25, 18, 40]
        }]
    }
});

new Chart(document.getElementById('chart3'), {
    type: 'doughnut',

    data: {
        labels: ['Validées', 'En attente', 'Refusées'],
        datasets: [{
            data: [60, 25, 15]
        }]
    }
});
const chart =  document.querySelector("#chart4")
new Chart(chart, {
    type: 'pie',

    data: {
        labels: ['A', 'B', 'C'],
        datasets: [{
            data: [30, 45, 25]
        }]
    }
});
