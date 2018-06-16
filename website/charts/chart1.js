var ctx = document.getElementById('myChart1').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ["2015", "2016", "2017"],
        datasets: [{
            label: "Asylanteneinwanderung",
            backgroundColor: 'rgb(25, 188, 145)',
            borderColor: 'rgb(26, 188, 156)',
            data: [1200000, 2500000, 10600000],
        }]
    },

    // Configuration options go here
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    min: 1200000,
                    beginAtZero: false
                }
            }]
        }
    }

});