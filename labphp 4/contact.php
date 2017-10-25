<!doctype html>
<html>
<?php include('config.php'); ?>
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
 		<div class="text">
 				<h2>Questions about the concept or need help with reserving/ending a reservation?</h2>

 				<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>

 				<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
 			</div>
 		<div class="form">
					<form method="GET">
						<div class="fadeout">

							<p>Name: *</p>
							<input id="firstName" class="bredd placeholder firstname" type="text" placeholder="Namn" name="firstname" required>
							<br>
                            <div id="firstNameValidationError" style="display:none">Only letters allowed</div>

							<p>E-mail: *</p>
							<input id="email" class="bredd placeholder email" type="email" placeholder="exempel@mail.com" name="e-mail" required>
							<br>
                            <div id="emailValidationError" style="display:none">Write a working email address</div>

							<p>Message: *</p>
							<textarea id="password" class="textruta password" type="text" placeholder="Skriv meddelande" name="password" required></textarea>
							<br>
                            <div id="pwdValidationError" style="display:none">The message should hold at least 6 letters</div>

						</div>
						<input id="signUp" onClick="logInCheck()" class="send" type="submit" value="Skicka meddelande!">
					</form>
				</div>
 		</main>
 		</div>
<?php include("footer.php"); ?>
</body>
</html>