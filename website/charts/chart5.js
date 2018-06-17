const data = [-0.04, -0.26, -0.09, -0.34, -0.20, -0.19, 0.13, -0.17, -0.10, 0.13, 0.30, 0.63, 0.82];
const colours = data.map((value) => value < 0 ? 'red' : 'blue');
var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ["1880", "1890", "1900", "1910", "1920", "1930", "1940", "1950", "1960", "1970", "1980", "1990", "2000", "2010"],
        datasets: [{
            label: "Globale Erwärmung von 1880 bis 2000",
            borderColor: colours,
            backgroundColor: colours,
            data: data,
            fill: false,
            data: [-0.04, -0.26, -0.09, -0.34, -0.20, -0.19, 0.13, -0.17, -0.10, 0.13, 0.30, 0.63, 0.82],

        }]
    },

    // Configuration options go here

});