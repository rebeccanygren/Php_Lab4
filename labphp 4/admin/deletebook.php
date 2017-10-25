<?php
include("config.php");
$title = "Delete book";
include("header.php");
?>

<h3>Delete books</h3>
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

//  if (!$searchtitle && !$searchauthor) {
//    echo "You must specify either a title or an author";
//    exit();
//  }

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
    echo '<tr><b><td>ISBN</td> <td>Title</td> <td>Author</td> <td>Delete</td> </b> </tr>';
    while ($stmt->fetch()) {
        if ($delete==0)
        $delete = "NO";
        else $delete = "YES"; 
        echo "<tr>";
        echo "<td> $isbn </td> <td> $title </td><td> $author </td> <td> $delete </td>";
        echo '<td><a href="deletedbook.php?isbn=' . urlencode($isbn) . '"> Delete </a></td>';
        echo "</tr>";
    }
    echo "</table>";
    ?>

<?php include("footer.php"); ?>