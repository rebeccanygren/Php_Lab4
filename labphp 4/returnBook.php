
<!doctype html>
<?php
include("config.php");
$title = "Search books";
include("header.php");
?>
<body>
 <head>
        <title>My site</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <meta name="viewport" content="initial-scale=1.0">
        <meta charset="utf-8" />
        <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400|Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'>
    </head>

 <body>
    <div id="sitecontainer">
        <main>

<?php


$isbn = trim($_GET['isbn']);
echo '<INPUT type="hidden" name="isbn" value=' . $isbn . '>';

$isbn = trim($_GET['isbn' ]);      // From the hidden field
$isbn = addslashes($isbn);

@ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

    if ($db->connect_error) {
        echo "could not connect: " . $db->connect_error;
        printf("<br><a href=index.php>Return to home page </a>");
        exit();
    }
    
   echo $isbn;

    // Prepare an update statement and execute it
    $stmt = $db->prepare("UPDATE Book SET reserved=0 WHERE isbn = ?");
    $stmt->bind_param('i', $isbn);
    $stmt->execute();
    printf("<br>Book succesfully returned!");
    printf("<br><a href=browse-books.php>Search and book more books in Browse Books </a>");
    printf("<br><a href=my-books.php>Return to My Books </a>");
    printf("<br><a href=index.php>Return to startpage </a>");
    exit;

?>

<?php include("footer.php"); ?>
</main>
</div>
</body>
</html>

    


