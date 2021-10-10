<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
	<link rel="stylesheet" href="style.css">
	<title>materialize CSS</title>
</head>

<body>




	<div class="container">
		<div class="row">
			<div class="container col s6 m4 l4 center-align">
				<h4>Buttons</h4>
				<a href="./buttons.html" class="btn-floating large purple darken-3">
					<i class="material-icons">add</i>
				</a>
			</div>

			<div class="container col s6 m4 l4 center-align">
				<h4>Depth</h4>
				<a href="./ShadowsAndDepth.html" class="btn-floating large purple darken-3">
					<i class="material-icons">view_in_ar</i>
				</a>
			</div>

			<div class="container col s6 m4 l4 center-align">
				<h4>Grid</h4>
				<a href="./grid.html" class="btn-floating large purple darken-3">
					<i class="material-icons">calendar_view_month</i>
				</a>
			</div>

			<div class="container col s6 m4 l4 center-align">
				<h4>Alignment</h4>
				<a href="./alignment.html" class="btn-floating large purple darken-3">
					<i class="material-icons">balance</i>
				</a>
			</div>

			<div class="container col s6 m4 l4 center-align">
				<h4>Hide</h4>
				<a href="./hide.html" class="btn-floating large purple darken-3">
					<i class="material-icons">balance</i>
				</a>
			</div>

			<div class="container col s6 m4 l4 center-align">
				<h4>Navbar</h4>
				<a href="./Navbar.html" class="btn-floating large purple darken-3">
					<i class="material-icons">menu</i>
				</a>
			</div>

			<div class="container col s6 m4 l4 center-align">
				<h4>Cards</h4>
				<a href="./cards.html" class="btn-floating large purple darken-3">
					<i class="material-icons">menu</i>
				</a>
			</div>

			<div class="container col s6 m4 l4 center-align">
				<h4>Collections</h4>
				<a href="./collections.html" class="btn-floating large purple darken-3">
					<i class="material-icons">menu</i>
				</a>
			</div>
		</div>
	</div>

	<br>
	<br>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

	<script>
		$(document).ready(function() {
			// Initialize collapse button
			$(".button-collapse").sideNav();
			// Initialize collapsible (uncomment the line below if you use the dropdown variation)
			//$('.collapsible').collapsible();
		})
	</script>
</body>

</html>