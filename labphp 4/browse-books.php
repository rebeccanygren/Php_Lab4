<!doctype html>
<?php
include("config.php");
$title = "Browse books";
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
 			<div class="text">
 				<h2>Browse books!</h2>

 				<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>

 				<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
 			</div>
 		<div id="browsebooks">
<div class="searchbook">
<h3>Search by title or Author:</h3>
            <hr>
            <form action="browse-books.php" method="POST">
                <table bgcolor="#abc0c0" cellpadding="6">
                    <tbody>
                        <tr>
                            <td>Title:</td>
                            <td><INPUT type="text" name="searchtitle"></td>
                        </tr>
                        <tr>
                        	<td>Author:</td>
                            <td><INPUT type="text" name="searchauthor"></td>
                            <td><INPUT type="submit" name="submit" value="Submit"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
            </div>

<h3>Book List</h3>
<hr>
<?php
# This is the mysqli version

$searchtitle = "";
$searchauthor = "";

if (isset($_POST) && !empty($_POST)) {
# Get data from form
    $searchtitle = trim($_POST['searchtitle']);
    $searchauthor = trim($_POST['searchauthor']);
}

//	if (!$searchtitle && !$searchauthor) {
//	  echo "You must specify either a title or an author";
//	  exit();
//	}

$searchtitle = addslashes($searchtitle);
$searchauthor = addslashes($searchauthor);

# Open the database
$db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

if ($db->connect_error) {
    echo "could not connect: " . $db->connect_error;
    printf("<br><a href=index.php>Return to home page </a>");
    exit();
}

# Build the query. Users are allowed to search on title, author, or both

$query = " select isbn, author, title, reserved from Book";


//echo "Running the query: $query <br/>"; # For debugging


  # Here's the query using an associative array for the results
//$result = $db->query($query);
//echo "<p> $result->num_rows matching books found </p>";
//echo "<table border=1>";
//while($row = $result->fetch_assoc()) {
//echo "<tr><td>" . $row['bookid'] . "</td> <td>" . $row['title'] . "</td><td>" . $row['author'] . "</td></tr>";
//}
//echo "</table>";
 

# Here's the query using bound result parameters
    // echo "we are now using bound result parameters <br/>";
    $stmt = $db->prepare($query);
    $stmt->bind_result($isbn, $author, $title, $reserved);
    $stmt->execute();

    echo '<table bgcolor="#dddddd" cellpadding="6">';
    echo '<tr><b><td>ISBN</td> <td>Title</td> <td>Author</td> <td>Reserved?</td> <td>Reserve</td> </b> </tr>';
    while ($stmt->fetch()) {
    	if ($reserved==0)
		$reserved = "NO";
		else $reserved = "YES"; 
        echo "<tr>";
        echo "<td> $isbn </td> <td> $title </td><td> $author </td> <td> $reserved </td>";
        echo '<td><a href="reserveBook.php?isbn=' . urlencode($isbn) . '"> Reserve </a></td>';
        echo "</tr>";
    }
    echo "</table>";
    ?>

<?php include("footer.php"); ?>
</body>
</html>

