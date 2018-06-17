var ctx = document.getElementById('myChart1').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ["1998", "2000", "2002", "2004","2006","2008","2010","2012","2014","2016"],
        datasets: [{
            label: "Arbeitslosenquote in Prozent",
            backgroundColor: 'rgb(25, 188, 145)',
            borderColor: 'rgb(26, 188, 156)',
            data: [11.1, 9.6, 9.8, 10.5,10.8,7.8,7.7,6.8,6.7,6.1],
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