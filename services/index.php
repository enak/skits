<!DOCTYPE html>
<html lang="en">
<head>
<link href="../include/styles.css" rel="stylesheet" type="text/css">
<?php include '../globalVariables.php'; 
echo $navIncludes; ?> 
<script type="text/javascript" src="/courses/ITI320/include/jquery-1.8.0.min.js"></script>
<title>Services</title>
</head>
<body>
<?php echo $header; echo $nav;?>
<div id="wrapper">
	<h1>Services</h1>
	<p>Below, there is a bulleted list of verbs. All of these actions are things that
	Steve could potentially do to technology for your home or small business. <b>Click on them for more information.</b></p>
	<ul>
	<li>Setup<div>Steve can set up networks, vpn, websites, phone systems, servers and much more.</div></li>
	<li>Repair<div>Steve can replace parts in computers like motherboards or hard drives.</div></li>
	<li>Secure<div>Securing networks and private information is very important. 
	People hate when their internet connection slows to a crawl because their neighbors decided to have a LAN party on their wireless router.</div></li>
	<li>Backup<div>Steve's philosophy, SOBS (save or be sorry) doesn't really help when your only storage medium just went up in flames or got eaten by a gorilla. He can help you or your business incorporate better information storage procedures.</div></li>
	<li>Implement<div>Steve can help you implement new or existing technologies into your business smoothly.</div></li>
	<li>Develop<div>If you are reading this message after May 2014, Steve has a degree in Computer Science so developing entirly new software for your business is not out of the question.</div></li>
	<li>Network</li>
	<li>Maintain</li>
	<li>Purchase</li>
	</ul>
</div>
<?php echo $footer; ?>
<script>
var x = 0;
$("ul li").css("cursor","pointer");
$("ul li div").css("display","none");
$("ul li").click(
	function(){
	if($(this).find("div").length > 0)
		alert($(this).find("div").html());
	});
</script>
</body>
</html>