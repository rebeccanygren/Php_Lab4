
<!doctype html>
<html>
    <head>
        <title>My site</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <meta name="viewport" content="initial-scale=1.0">
        <meta charset="utf-8" />
        <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400|Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'>
    </head>

 <body>
 	<div id="sitecontainer">
 		<?php include("header.php"); ?>
 		<main>
 			<div class="buttons">
 				<div class="button">
 					<a href="addbook.php">
 						<button><h1>ADD BOOKS</h1></button>
 					</a>
 				</div>

 				<div class="button">
 					<a href="deletebook.php">
 						<button><h1>DELETE BOOKS</h1></button>
 					</a>
 				</div>
 				<div class="button">
 					<a href="logout.php">
 						<button><h1>LOGOUT</h1></button>
 					</a>
 				</div>
 		    </div>
				</div>
 		</main>
		<?php include("footer.php"); ?>
	</div>
</body>
</html>

