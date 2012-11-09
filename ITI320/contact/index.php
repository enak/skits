<!DOCTYPE html>
<html lang="en">
<head>
<link href="../include/styles.css" rel="stylesheet" type="text/css">
<?php include '../globalVariables.php'; 
	echo $navIncludes; ?> 
<title>Contact Us</title>
</head>
<body>
<?php echo $header; echo $nav;?>
<?php 
if(isset($_POST['contact_us']) && isset($_POST["email"]))
{
	$recipient = "skits@stevekane.us";
	$subject = "Contact Us Response";
	$email = '';
	while (list($field, $value) = each($_POST)) 
	{
		$value=trim($value);
		if($field == "email")
		{
			$from = $value;
		}
		$email .= "\n $field : $value";
	}
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/plain; charset=UTF-8\n";
	$headers .= "From: ".$from."\n";
	$headers .= "Reply-To: ".$from."\n";
	mail($recipient, $subject, $email, $headers);	
	echo '<p>Thank you for contacting SKITS. Steve or Steve, or Steve will contact you soon.</p>';
}
?>
<div id="wrapper">
	<h1>Contact Steve</h1>
	<form method="post" action=".">
	<table>
	<tr>
	<td><label for="firstName">First Name: </label></td>
	<td><input name="firstName" type="text" size="30"></td>
	</tr>
	<tr>
	<td><label for="lastName">Last Name: </label></td>
	<td><input name="lastName" type="text" size="30"><br /></td>
	</tr>
	<tr>
	<td><label for="company">Company: </label></td>
	<td><input name="company" type="text" size="50"></td>
	</tr>
	<tr>
	<td><label for="email">Email: </label></td>
	<td><input name="email" type="text" size="50"></td>
	</tr>
	<tr>
	<td colspan="2"><label for="comments">Questions, Comments, Feedback: </label><br /></td>
	</tr>
	<tr>
	<td colspan="2"><textarea name="comments" style="width: 100%; height: 150px;"></textarea></td>
	</tr>
	</table>
	<br />
	<input type="submit" name="contact_us" value="Submit">
	</form>
</div>
<div id="alternateContact">
	<h3>Here are some additional ways to contact Steve:</h3>
	<img src="../include/icons.fw.png" alt="social media icons" width="320" height="64" usemap="#Map" border="0" />
	<map name="Map" id="Map">
	  <area shape="rect" coords="-1,0,63,65" href="http://www.linkedin.com/pub/steve-kane/56/278/282" target="_blank" alt="linked in" />
	  <area shape="rect" coords="62,0,128,62" href="http://www.facebook.com/stevekane9" target="_blank" alt="Facebook" />
	  <area shape="rect" coords="191,-1,255,67" href="mailto:steve.kane@gmail.com" target="_blank" alt="email" />
	  <area shape="rect" coords="253,1,321,61" href="https://www.google.com/#hl=en&amp;tbo=d&amp;output=search&amp;sclient=psy-ab&amp;q=site:stevekane.us&amp;fp=1a90dd8fc27f4a67" target="_blank" alt="Search this site in Google" />
	  <area shape="rect" coords="127,1,190,62" href="http://www.twitter.com/stevekane119" target="_blank" alt="Twitter" />
	</map>
</div>
<?php echo $footer; ?>
</body>
</html>