<?php 
if(isset($_GET['r'])) {
  $r = $_GET['r'];
} else {
  $r = 0;
}

if(isset($_GET['f'])) {
  $f = $_GET['f'];
} else {
  $f = 0;
}

if (isset($_GET['result'])) {
    if($_GET['result'] == "corr") {
        $r = $r + 1;
    } elseif ($_GET['result'] == "wrong") {
        $f = $f + 1;
    }
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
      html {overflow-x: hidden;}
      body {overflow-x: hidden;}
    </style>
    <title>Zahlen lügen nicht?</title>
    <!-- Jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=latin-ext" rel="stylesheet">

    <script src="https://cdn.anychart.com/js/8.0.1/anychart-core.min.js"></script>
    <script src="https://cdn.anychart.com/js/8.0.1/anychart-pie.min.js"></script>

    <link rel="stylesheet" type="text/css" href="result_style.css">
  </head>
  <body>
    
  	<h1>Dein Ergebnis!</h1>


  	<div id="explaination">
  		<h2 id="soLaeufts">Geschafft!</h2>
  		<p id="soAuch">
  		  Hier kannst Du Dein Ergebnis sehen. Spiele auch mal in anderen Rollen. Und so weiter...
  		</p>
  	</div>

    <div id="pieChart">

    </div>

    <a href="index.html">
      <div id="nochmal">
        Noch eine Runde?
      </div>
    </a>

    <script type="text/javascript">
      
      anychart.onDocumentReady(function() {

        // set the data
        var data = [
          {
            x: "Rigth", 
            value: <?php echo $r; ?>, 
            normal: {
              fill: "#00b894",       
            },
            exploded: true
          },
          {x: "Wrong", value: <?php echo $f; ?>, 
            normal: {
              fill: "#d63031",      
            }
          }
        ];

        // create the chart
        var chart = anychart.pie();

        // add the data
        chart.data(data);

        chart.background().fill("#ffeaa7");
        // set legend position
        chart.legend().position("right");
        // set items layout
        chart.legend().itemsLayout("vertical");

        // display the chart in the container
        chart.container('pieChart');
        chart.draw();


      });
    </script>

  </body>
</html>