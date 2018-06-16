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

  	<h1>Headline</h1>


  	<div id="explaination">
  		<h2 id="soLaeufts">Das Problem</h2>
  		<p id="soAuch">
  		  Bacon ipsum dolor amet beef ribs short ribs tongue drumstick. Tenderloin frankfurter porchetta turkey, pork chop jerky ball tip pork loin burgdoggen pancetta meatball buffalo hamburger ham hock flank. Ball tip turducken capicola ham hock, pork belly shank corned beef pork loin andouille meatloaf.
  		</p>
  	</div>

  	<div id="choices">
	  	<div class="choice" id="choice1" onclick="choice(1)">
		  	<p>Bacon ipsum dolor amet beef ribs short ribs tongue drumstick.</p>
		  </div>

		  <div class="choice" id="choice2" onclick="choice(2)">
		  	<p>Bacon ipsum dolor amet beef ribs short ribs tongue drumstick.</p>
		  </div>
  	</div>


  	<script type="text/javascript" src="quest_script.js"></script>

  </body>
</html>