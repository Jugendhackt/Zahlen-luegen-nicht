var ctx = document.getElementById('myChart2').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ["1Q 2010", "1Q 2012", "1Q 2014", "1Q 2016"],
        datasets: [{
            label: "Umsatz in Milliarden US-Dollar",
            backgroundColor: 'rgba(25, 188, 145, 0)',
            borderColor: 'rgb(26, 188, 156)',
            data: [7.13, 13.19, 19.74, 29.13],

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