<html>
<body>
<center>
<h1> Book Review Blog </h1>
<?php
include("dbconnect.php");
include("managePosts.php");
$con= new dbconnect();
$con->connect();
error_reporting(E_ALL);
$result = mysql_query("SELECT * FROM bookposts ORDER BY date_published DESC");

$posts= new managePosts();
$posts->createTable();

$counter = 0;
while($row = mysql_fetch_array($result))
{
    $posts->displayRowEdit($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $counter);
    $counter++;
}
?>
</table>
<br><br>
<form action="insertPosts.php">
<input type="submit" value="Submit a Book Review"/></form>
</center>
</body>
</html>