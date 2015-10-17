<?php
	require('_sql-connect/sql-connect_bbb_ro.php');
	date_default_timezone_set ("Europe/Vienna"); 
?>

<!DOCTYPE html>
<html>

 <head>
	<meta charset="utf-8">
	<link href="style.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="javascript.js"></script>
	<script type='text/javascript' src='jquery.js'></script>
	<script type="text/javascript" src="dexie.js"></script>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<title>Bierbraubaron "Don Promillo"</title>
 </head>
 
 <body>
	
	<a href='2sliders.html'>2 Sliders - HTML 5 testsite</a><br>
	<a href='upgrades.html'>Cashmachine - Working Game</a><br>
	<a href='hopfenbiergeld.html'>Buy Hopfen, brew Bier and sell it</a><br>
	<a href='3_objekte.html'>Objektorientiert - wenn ma des so sagen darf</a><br>
	
  <script>
	
		var db = new Dexie("bbb");
		db.version(1).stores({
			places: "++id,name,order,description"
		});
		
		db.open();
		
		db.places.add({
			name: "Keller", 
			order: 1,
			description: "Dein Keller - ein perfekter Ort um Bier zu brauen"
		});
		db.places.add({
			name: "Markt", 
			order: 2,
			description: "buy and sell stuff"
		}).then (function () {
			console.log("Transaction successfully completed");
		});
		
		
	
  </script>
	
 </body>
</html>


 





