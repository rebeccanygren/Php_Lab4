	<!doctype html>

	<?php include('config.php'); ?>

	<html>
	<head>
        <title>My site</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <meta name="viewport" content="initial-scale=1.0">
        <meta charset="utf-8" />
        <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400|Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'>
    </head>

		<header>
		<a href="index.php">
 			<img class="logo" src="img/headerimage.jpg">
 			<div class="navigation">
 				<nav>
					<ul id="nav">
					<li> <a class="<?php echo ($current_page =='index.php' ||$current_page=="") ? 'active' : NULL?>" href="index.php" >HOME</a> </li>
					<li> <a class="<?php echo $current_page =='about-us.php' ? 'active' : NULL?>" href="about-us.php">ABOUT US</a> </li>
					<li> <a class="<?php echo $current_page =='browse-books.php' ? 'active' : NULL?>" href="browse-books.php">BROWSE BOOKS</a> </li>
                	<li> <a class="<?php echo $current_page =='my-books.php' ? 'active' : NULL?>" href="my-books.php">MY BOOKS</a> </li>
           			<li> <a class="<?php echo $current_page =='login.php' ? 'active' : NULL?>" href="login.php">LOGIN</a> </li>
                	<li> <a class="<?php echo $current_page =='gallery.php' ? 'active' : NULL?>" href="gallery.php">GALLERY</a> </li>
               		<li> <a class="<?php echo $current_page =='contact.php' ? 'active' : NULL?>" href="contact.php">CONTACT</a> </li>
 					</ul>
 					</nav>
 				</div>
 		</header>
 	<html>