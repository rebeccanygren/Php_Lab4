<?php

@ $db = new mysqli('localhost', 'root', 'password', 'Bookclub');

if ($db->connect_error) {
    echo "could not connect: " . $db->connect_error;
    printf("<br><a href=index.php>Return to home page </a>");
    exit();
}

    #the mysqli_real_espace_string function helps us solve the SQL Injection
    #it adds forward-slashes in front of chars that we can't store in the username/pass
    #in order to excecute a SQL Injection you need to use a ' (apostrophe)
    #Basically we want to output something like \' in front, so it is ignored by code and processed as text

if (isset($_POST['username'], $_POST['password'])) {
    #with statement under we're making it SQL Injection-proof
    $uname = mysqli_real_escape_string($db, $_POST['username']);
    
    #without function, so here you can try to implement the SQL injection
    #various types to do it, either add ' -- to the end of a username, which will comment out
    #or simply use 
    #' OR '1'='1' #
    #$uname = $_POST['username'];
    
    #here we hash the password, and we want to have it hashed in the database as well
    #optimally when you create a user (through code) you simply send a hash
    #hasing can be done using different methods, MD5, SHA1 etc.
    
    $upass = sha1($_POST['password']);
    
    #just to see what we are selecting, and we can use it to test in phpmyadmin/heidisql
        
    $query = ("SELECT * FROM User WHERE username = '{$uname}' "."AND password = '{$upass}'");
       
    
    $stmt = $db->prepare($query);
    $stmt->execute();
    $stmt->store_result(); 
    
    #here we create a new variable 'totalcount' just to check if there's at least
    #one user with the right combination. If there is, we later on print out "access granted"
    $totalcount = $stmt->num_rows();
    
    
    
}

 
        
        
        
        if (isset($totalcount)) {
            if ($totalcount == 0) {
                echo '<h2>Aww, you got it all wrong!</h2>';
            } else {
                header("location: gallery.php"); 
            }
        }
       
?>
<!DOCTYPE html>

<?php
include("config.php");
$title = "FileUpload";
include("header.php");
?>


    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>My site</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <meta name="viewport" content="initial-scale=1.0">
        <meta charset="utf-8" />
        <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400|Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'>
        <title></title>
    </head>
    <body>

     <div id="sitecontainer">
        <main>

               <div>
       
        <form method="POST" action="">
            <input type="text" name="username">
            <input type="password" name="password">
            <input type="submit" value="Go">
        </form>
        <br>
        </div>
<?php include("footer.php"); ?>
</main>
</div>
    </body>
</html>