<!DOCTYPE html>
<html>
  <head>
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

    <link rel="stylesheet" type="text/css" href="quest_style.css">
  </head>
  <body>

  	<h1 onclick="window.location = 'index.html'">Headline</h1>


  	<div id="explaination">
  		<h2 id="ueberschrift">
  		<p id="beschreibung"></p>
  	</div>

    <div id="frame">
      <div id="choices">
        <table>
            <tr>
                <th>
                  <div class="choice">
                    <canvas id="canvas1"></canvas>
                  </div>
                </th>
                <th>
                  <div class="choice">
                    <canvas id="canvas2"></canvas>
                  </div>
                </th>
            </tr>
        </table>
    	</div>
  </div>


    <div id="myProgress">
      <div id="myBar" class="bar" style="width: <?php echo (20 * ($f + $r))?>%"></div>
    </div>

  	<script type="text/javascript" src="quest_script.js"></script>

  </body>
</html>