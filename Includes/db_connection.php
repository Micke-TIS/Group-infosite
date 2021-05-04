<?php
//Database connection
$servername='localhost';
$username='root';
$password='';
$dbname = "example";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
die('Could not Connect My Sql:' .mysql_error());
}

//Select specific columns from DB
$query = mysqli_query($conn, "SELECT * FROM tbl_articles");
while($row = mysqli_fetch_assoc($query))
{
$menu_about = $row['about'];
$menu_features = $row['features'];
$menu_faq = $row['faq'];
$menu_blog = $row['blog'];
$menu-item = $row['contact us'];
}
?>
