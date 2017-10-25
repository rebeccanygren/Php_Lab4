<?php
ob_start(); 

session_start();
if (isset($_SESSION['username'])) {
    header("location:main.php");
}
?>
<?php 
include("config.php"); 
?>

<?php if(isset($_POST) && !empty($_POST)) : ?>

<?php 
	$myusername =  stripslashes($_POST['username']);
	$mypassword =  stripslashes($_POST['password']);
	
	@ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

	if ($db->connect_error) {
		echo "could not connect: " . $db->connect_error;
		exit();
	}

	$stmt = $db->prepare("SELECT username, password FROM librarians WHERE username = ?");
	$stmt->bind_param('s', $myusername);
	$stmt->execute();
	
    $stmt->bind_result($username, $password);

    while ($stmt->fetch()) {
        if (sha1($mypassword) == $password)
		{
			$_SESSION['username'] = $myusername;
			header("location:main.php");
			exit();
		}
    }

?>

<?php endif;?>


<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="topnav">
  <a class="active" href="index.php">Login</a>
</div>
<div class="container">
    <form method="POST" action="">
            <input type="text" name="username">
            <input type="password" name="password">
            <input type="submit" value="Go">
    </form>
</div>
</body>
</html>

