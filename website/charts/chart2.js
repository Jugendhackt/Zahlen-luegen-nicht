var ctx = document.getElementById('myChart2').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ["2014", "2015", "2016", "2017"],
        datasets: [{
            label: "Asylanteneinwanderung",
            backgroundColor: 'rgb(25, 188, 145)',
            borderColor: 'rgb(26, 188, 156)',
            data: [100000000, 1200000000, 2500000000, 10600000000],
        }]
    },

    // Configuration options go here
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    min: 0,
                    beginAtZero: true
                }
            }]
        }
    }

});