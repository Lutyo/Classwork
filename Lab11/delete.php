<?php
include("dbconnect.php");
$con= new dbconnect();
$con->connect();
if(isset($_POST['DELETE'])) {
        $postID = $_POST['DELETE'];
	$sSql = "DELETE FROM posts WHERE post_id=\"$postID\"";
      echo $sSql;
	  
	  
	$oResult = mysql_query($sSql);
        $rows=mysql_affected_rows();
	echo "<h2>$rows Record(s) Deleted </h2>";
	
}
?>
<a href="lab11.php">Home</a>
