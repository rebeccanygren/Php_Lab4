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
 					<a href="browse-books.php">
 						<button><h1>BROWSE AND RESERVE BOOKS</h1></button>
 					</a>
 				</div>

 				<div class="button">
 					<a href="my-books.php">
 						<button><h1>SEE YOUR RESERVATIONS</h1></button>
 					</a>
 				</div>
 		    </div>

 			<div class="text">
 				<h2>Welcome to "Student Book Club"!</h2>

 				<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>

 				<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
 			</div>

 				<div class="boxar">
				<h2></h2>
				<ul>
					<li>
						<a href="#">
							<div class="box"> <img src="img/aboutusbooks.jpeg">
								<h4>NEW BOOKS</h4>
								<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." </p>
							</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="box"> <img src="img/aboutusbooks.jpeg">
								<h4>EXTEND OR END YOUR RESERVATION</h4>
								<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." </p>
							</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="box"> <img src="img/aboutusbooks.jpeg">
								<h4>BROWSE BOOKS BY COURSE</h4>
								<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." </p>
							</div>
						</a>
					</li>
				</ul>
				</div>
 		</main>
<?php include("footer.php"); ?>
	</div>
</body>
</html>

