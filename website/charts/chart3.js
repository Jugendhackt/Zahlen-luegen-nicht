var ctx = document.getElementById('myChart1').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ["1Q 2007", "1Q 2010", "1Q 2012", "1Q 2014"],
        datasets: [{
            label: "Umsatz in Milliarden US-Dollar",
            backgroundColor: 'rgba(25, 188, 145, 0)',
            borderColor: 'rgb(231, 76, 60)',
            data: [3.02, 7.13, 13.19, 19.74],

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