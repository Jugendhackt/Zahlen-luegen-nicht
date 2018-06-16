<?php
$antworten = [2, 1, 2, 2, 1, 2, 1, 1, 2, 1];


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


if(isset($_GET['ask'])) {
    $ask = $_GET['ask'] + 1;
    if ($ask == 6) {
        ?>
        <script>window.location = "result.php?f=<?php echo $f ?>&r=<?php echo $r ?>&result=<?php echo $_GET['result'] ?>";</script>
        <?php
    }
} else {
    $ask = 1;
}


if (isset($_GET['result'])) {
    if($_GET['result'] == "corr") {
        $r = $r + 1;
    } elseif ($_GET['result'] == "wrong") {
        $f = $f + 1;
    }
}

if(isset($_GET['role'])) {
    $role = $_GET['role'];
} else {
    ?>
    <script>window.location = "index.html";</script>
    <?php
}
?>

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
  		<h2 id="soLaeufts">Das Problem</h2>
  		<p id="soAuch">
  		  Bacon ipsum dolor amet beef ribs short ribs tongue drumstick. Tenderloin frankfurter porchetta turkey, pork chop jerky ball tip pork loin burgdoggen pancetta meatball buffalo hamburger ham hock flank. Ball tip turducken capicola ham hock, pork belly shank corned beef pork loin andouille meatloaf.
  		</p>
  	</div>

  	<div id="choices">
        <a id="link1" href="quest.php?r=<?php echo $r ?>&f=<?php echo $f ?>&result=<?php if ($antworten[$ask] == 1) {echo "corr";} else {echo "wrong";} ?>&ask=<?php echo $ask ?>&role=<?php echo $role ?>">
            <div class="choice" id="choice1" onclick="choice(1)">
		      	<p>Bacon ipsum dolor amet beef ribs short ribs tongue drumstick.</p>
            </div>
        </a>


        <a id="link2" href="quest.php?r=<?php echo $r ?>&f=<?php echo $f ?>&result=<?php if ($antworten[$ask] == 2) {echo "corr";} else {echo "wrong";} ?>&ask=<?php echo $ask ?>&role=<?php echo $role ?>">
            <div class="choice" id="choice2" onclick="choice(2)">
                <p>Bacon ipsum dolor amet beef ribs short ribs tongue drumstick.</p>
            </div>
        </a>

  	</div>

    <div id="myProgress">
      <div id="myBar" class="bar" style="width: <?php echo (20 * ($f + $r))?>%"></div>
    </div>

  	<script type="text/javascript" src="quest_script.js"></script>

  </body>
</html>