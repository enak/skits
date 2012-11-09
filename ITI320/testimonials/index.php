<!DOCTYPE html>
<html lang="en">
<head>
<link href="../include/styles.css" rel="stylesheet" type="text/css">
<?php include '../globalVariables.php'; 
	echo $navIncludes; ?> 
<title>Testimonials</title>
</head>
<body>
<?php echo $header; echo $nav;?>
<div id="wrapper">
<h1>Testimonials</h1>
<p>Here are some things that people said about <a href="http://www.revellcomputerrepair.com/testimonials.php">Revell Computer Repair</a> in their testimonials section. I'd like to think that my clients feel the same way about me. If you're one of my clients, send me an email at <a href="mailto:skits@stevekane.us">skits@stevekane.us</a> or go to the Contact page so that I can post something real instead.</p>

<?php
$con = mysql_connect("$dbHost", "$dbUser", "$dbPass");

if (!$con)
{
	echo "bad";
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("$dbName", $con);

$sql = "SELECT * FROM testimonials";
$sql = mysql_query("$sql");
echo '<table border="4">';
while($aTestimonial = mysql_fetch_array($sql))
{
	echo '<tr>';
	echo '<td>'.$aTestimonial['user_info'].'</td>';
	echo '<td>'.$aTestimonial['text'].'</td>';
	echo '</tr>';
}
echo "</table><br />";
mysql_close($con);
?>
</div>
<?php echo $footer; ?>

</body>
</html>