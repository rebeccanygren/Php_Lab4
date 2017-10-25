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
		<a href="main.php">
 			<img class="logo" src="img/headerimage.jpg">
 			<div class="navigation">
 				<nav>
					<ul id="nav">
					<li> <a class="<?php echo ($current_page =='main.php' ||$current_page=="") ? 'active' : NULL?>" href="main.php" >Adminpanel</a> </li>
					<li> <a class="<?php echo $current_page =='.../fileUpload.php' ? 'active' : NULL?>" href="fileUpload.php">GALLERY UPLOAD</a> </li>
					<li> <a class="<?php echo $current_page =='addbook.php' ? 'active' : NULL?>" href="addbook.php">ADD BOOKS</a> </li>
                	<li> <a class="<?php echo $current_page =='deletebook.php' ? 'active' : NULL?>" href="deletebook.php">DELETE BOOKS</a> </li>
      				<li> <a class="<?php echo $current_page =='logout.php' ? 'active' : NULL?>" href="logout.php">LOGOUT</a> </li>
 					</ul>
 					</nav>
 				</div>
 		</header>
 	<html>