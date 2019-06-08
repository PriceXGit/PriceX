<?php
	require_once("db.php");
	if($connection == false) {
	echo "Error!";
	echo mysqli_connect_errno();
	exit();
	}
?>
<!doctype html>
<html>
  <head>
    <title>PriceX</title>
	    <script src="scripts/jquery-3.4.1.min.js" type="text/javascript"></script> 
		<link href="styles/style1.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body>
	<div id="options" class="container">
		<div class="row align-items-center" id="1">
			<span>Rozetka</span> 
			<a href="*"><img class='img' src="example/s10.jpg" Title = "s10">s10</a>
		</div>
		<div class="row align-items-center" id="2"> 
			<span>Foxtrot</span>
			<a href="*"><img class='img' src="example/s10.jpg" Title = "s10"></a>
		</div>
		<div class="row align-items-center" id="3"> 
			<p class="text-center">Eldorado</p>
			<a href="*"><img class='img' src="example/s10.jpg" Title = "s10"></a>
		</div>
		<div class="row align-items-center" id="4"> 
			<span>Comfy</span>
			<a href="*"><img class='img' src="example/s10.jpg" Title = "s10"></a>
		</div>
		<div class="row align-items-center" id="5"> 
			<span>Citrus</span>
			<a href="*"><img class='img' src="example/s10.jpg" Title = "s10"></a>
		</div>
		<div class="row align-items-center" id="6"> 
			<span>Palladium</span>
			<a href="*"><img class='img' src="example/s10.jpg" Title = "s10"></a>
		</div>

	</div>
	<?php 
$query = mysqli_query($connection, "SELECT * FROM $dbarticles ORDER BY id DESC"); 
$numrows = mysqli_num_rows($query); 
$i = 0; 
echo '<table width="500" border="1"><tr>';
	while ($row = mysqli_fetch_assoc($query)){
		$i++; 
		
		if($i%3 == 0){
		echo '<td>'.$row['id'].$row['title'].'</td></tr><tr>';
		
		} elseif($i%3 != 0) {
			echo '<td>'.$row['id'].$row['title'].'</td>';
		
		} elseif ($i == $numrows) {
			echo '<td>'.$row['id'].$row['title'].'</td></tr>';
		}
	}
echo '</table>';	
	?>

	<div id="dannie"></div> <!-- в этот блок буду загружать данные, которые будут показываться пользователю-->
	<script src="popup.js"></script><!-- скрипт, выполняющийся при нажатии на иконку расширения-->
  </body>
</html>