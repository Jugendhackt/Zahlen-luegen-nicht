var ctx = document.getElementById('myChart2').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ["2000", "2005", "2010", "2015"],
        datasets: [{
            label: "polizeilich erfasste Faelle von Gewaltkriminalitaet",
            backgroundColor: 'rgb(25, 188, 145)',
            borderColor: 'rgb(26, 188, 156)',
            data: [187103, 212832, 201243, 181386],
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