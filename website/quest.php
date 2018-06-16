<?php
//$antworten = [2, 1, 2, 2, 1, 2, 1, 1, 2, 1];

error_reporting(0);
ini_set('display_errors', 0);

if(isset($_GET['role'])) {
    $role = $_GET['role'];
} else {
    ?>
    <script>window.location = "index.html";</script>
    <?php
}




$mysqli = new mysqli("localhost", "root", "", "jh");
if ($mysqli->connect_errno) {
    die("Verbindung fehlgeschlagen: " . $mysqli->connect_error);
}
$id = 100;
$sql = "SELECT * FROM graphs WHERE `class` = ".$role;
$statement = $mysqli->prepare($sql);

$statement->execute();

$result = $statement->get_result();

$classes = [];
$headers = [];
$beschs = [];
$js1s = [];
$js2s = [];
$jsFull1s = [];
$jsFull2s = [];
$corrects = [];


while($row = $result->fetch_assoc()) {
    array_push($classes, $row['class']);
    array_push($headers, $row['header']);
    array_push($beschs, $row['expl']);
    array_push($js1s, $row['jsloc1']);
    array_push($js2s, $row['jsloc2']);
    array_push($jsFull1s, $row['fullLoc1']);
    array_push($jsFull2s, $row['fullLoc2']);
    array_push($corrects, $row['correct']);
}




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
$newAsk = $ask - 1;

$class = $classes[$newAsk];
$header = $headers[$newAsk];
$beschreibung = $beschs[$newAsk];
$loc1 = $js1s[$newAsk];
$loc2 = $js2s[$newAsk];
$locFull1 = $jsFull1s[$newAsk];
$locFull2 = $jsFull2s[$newAsk];
$correct = $corrects[$newAsk];



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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

    <link rel="stylesheet" type="text/css" href="quest_style.css">
  </head>
  <body>

  	<h1 onclick="window.location = 'index.html'">Zahlen l&uuml;gen <s>nicht</s>?</h1>


  	<div id="explaination">
  		<h2 id="soLaeufts"><?php echo $header; ?></h2>
  		<p id="soAuch">
  		<?php echo $beschreibung ?>
        </p>
  	</div>
  	<div id="choices">
      <table>
        <tr>
          <th>
            <a id="link1" href="quest.php?r=<?php echo $r ?>&f=<?php echo $f ?>&result=<?php if ($correct == 1) {echo "corr";} else {echo "wrong";} ?>&ask=<?php echo $ask ?>&role=<?php echo $role ?>">
              <div class="choice" id="choice1">
                <canvas id="myChart1" onmouseover="window.open('<?php echo $locFull1;?>')"></canvas>
              </div>
            </a>
          </th>
          <th>
            <a id="link2"  href="quest.php?r=<?php echo $r ?>&f=<?php echo $f ?>&result=<?php if ($correct == 2) {echo "corr";} else {echo "wrong";} ?>&ask=<?php echo $ask ?>&role=<?php echo $role ?>">
              <div class="choice" id="choice2" >
                <canvas id="myChart2" onmouseover="window.open('<?php echo $locFull2;?>')"></canvas>
              </div>
            </a>
          </th>
        </tr>
      </table>
  	</div>
    
    <div id="myProgress">
      <div id="myBar" class="bar" style="width: <?php echo (20 * ($f + $r))?>%"></div>
    </div>

  	<script type="text/javascript" src="quest_script.js"></script>
  <script src="<?php echo $loc1 ?>"></script>
    <script src="<?php echo $loc2 ?>"></script>
  </body>
</html>