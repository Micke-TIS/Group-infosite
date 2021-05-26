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
$menu_about = $row['menu_about'];
$menu_features = $row['menu_features'];
$menu_faq = $row['menu_faq'];
$menu_blog = $row['menu_blog'];
$menu_contact = $row['menu_contact'];
}

//Select specific columns from DB tbl_menu_text - mateusz
$query = mysqli_query($conn, "SELECT * FROM tbl_menu_text");
while($row = mysqli_fetch_assoc($query))
{
$menu_h1 = $row['menu_h1'];
$menu_paragrapth = $row['menu_paragrapth'];

}

//Select specific columns from tbl_footer - oliver
$query = mysqli_query($conn, "SELECT * FROM tbl_footer");
while($row = mysqli_fetch_assoc($query))
{
$footer_h2 = $row['footer_h2'];
$footer_paragraph = $row['footer_paragraph'];
$footer_copyright = $row['footer_copyright'];

}

//Select specific columns from DB tbl_testimonials- mateusz
$query = mysqli_query($conn, "SELECT * FROM tbl_testimonials");
while($row = mysqli_fetch_assoc($query))
{
$testimonials_h1 = $row['testimonials_h1'];
$testimonials_paragrapth = $row['testimonials_paragrapth'];
$testimonials_h2 = $row['testimonials_h2'];
$testimonials_paragrapth2 = $row['testimonials_paragrapth2'];
$testimonials_h3 = $row['testimonials_h3'];
$testimonials_paragrapth3 = $row['testimonials_paragrapth3'];
$testimonials_h4 = $row['testimonials_h4'];
$testimonials_paragrapth4 = $row['testimonials_paragrapth4'];
$testimonials_h5 = $row['testimonials_h5'];

}
?>
