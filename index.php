<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
</head>
<body>
	<?php

		$username



	?>
	<nav class="box">
		<div class="header">
			<h1> Language Exploration </h1>
		</div>
	</nav>
		<div class="startbtn">
			<button id="btn"> Start Here </button>		
			<div id="drop" class="content">
				<a href="view.php">View</a>
				<a href="search.php">Search</a>
    			<a href="add.php">Add</a>
    			<a href="delete.php">Delete</a>
    			<a href="update.php">Update</a>
    		</div>
		</div>
	


<!-- WORK ON LINKING EACH PAGE TO TABS SO THEY DISPLAY BELOW THEM -->



<script>

document.getElementById("btn").onclick = function() {myFunction()};

function myFunction() {
  document.getElementById("drop").classList.toggle("show");
}
</script>


	

</body>

<style>

	body {
		background-color: #D7BEA8;
	}

	nav {
		background-color: #744253;
		height: 600px;
		margin: -80px;
		border-bottom: 5px solid #B49286; 
	}

	.header {
		color: white;
		text-align: center;
	}

	h1 {
		font-size: 50pt;
		font-family: 'Montserrat';
		font-weight: bold;
		text-align: center;
		padding: 400px;	
	}

	.startbtn button {
		background-color: #B49286;
		color: white;
		font-size: 18pt;
		font-family: 'Montserrat';
		font-weight: bold;
		height: 80px;
		width: 180px;
		border-radius: 20px;
		outline: none;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		margin: -20px;
	}

	button:hover {
		background-color: #C78283;
	}

	.startbtn {
		text-align: center;
	}

	.content {
		display: none;
		text-align: center;
		margin-top: 40px;
	}

	.content a:hover {
		background-color: #544253;
	}

	a {
		background-color: #744253;
		color: white;
		font-size: 14pt;
		font-family: 'Montserrat';
		font-weight: bold;
		text-align: center;
		height: 30px;
		width: 120px;
		outline: none;
		padding: 10px 10px 0px 10px;
  		word-wrap: normal;
  		display: inline-block;
  		
	}

	a:link {
		text-decoration: none;
	}

	.show {
		display:block;
	}

</style>
</html>

<!-- 
color palette:
C78283	F3D9DC	D7BEA8	B49286	744253
 -->