//var data = [0.30, 0.69, 0,82];
//var colours = [0.30, 0.69, 0,82].map((value) => value < 0 ? 'red' : 'blue');
var ctx = document.getElementById('myChart2').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ["1980", "1990", "2000"],
        datasets: [{
            label: "Globale Erwärmung von 1880 bis 2000",
            borderColor: [0.30, 0.69, 0.82].map((value) => value < 0 ? 'red' : 'blue'),
            backgroundColor: [0.30, 0.69, 0.82].map((value) => value < 0 ? 'red' : 'blue'),
            data: [0.30, 0.69, 0.82],
            fill: false,
        }]
    },

    // Configuration options go here

});