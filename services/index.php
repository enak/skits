<!DOCTYPE html>
<html lang="en">
<head>
<link href="../include/styles.css" rel="stylesheet" type="text/css">
<?php include '../globalVariables.php'; 
echo $navIncludes; ?> 
<script type="text/javascript" src="/courses/ITI320/include/jquery-1.8.0.min.js"></script>
<title>Services</title>
    <!--<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />-->
    <link rel="stylesheet" href="../include/dot-luv/jquery-ui-1.9.1.custom.min.css" />
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
    <script>
    $(function() {
        $( "#accordion" ).accordion();
    });
    </script>
</head>
<body>
<?php echo $header; echo $nav;?>
<div id="wrapper">
	<h1>Services</h1>
	<p>Below, there is a list of things Steve can do for your company or home office.</p>
<div id="accordion">
    <h3>Setup</h3>
    <div>
        <p>Steve can set up networks, vpn, websites, phone systems, servers and much more.</p>
    </div>
    <h3>Repair</h3>
    <div>
        <p>Steve can replace parts in computers like motherboards or hard drives.</p>
    </div>
    <h3>Secure</h3>
    <div>
        <p>Securing networks and private information is very important. People hate when their internet connection slows to a crawl because their neighbors decided to have a LAN party on their wireless router.</p>
    </div>
    <h3>Backup</h3>
    <div>
        <p>Steve's philosophy, SOBS (save or be sorry) doesn't really help when your only storage medium just went up in flames or got eaten by a gorilla. He can help you or your business incorporate better information storage procedures.</p>
    </div>
    <h3>Implement</h3>
    <div>
        <p>Steve can help you implement new or existing technologies into your business smoothly.</p>
    </div>
    <h3>Develop</h3>
    <div>
        <p>If you are reading this message after May 2014, Steve has a degree in Computer Science so developing entirly new software for your business is not out of the question.</p>
    </div>
    <h3>Network</h3>
    <div>
        <p></p>
    </div>
    <h3>Maintain</h3>
    <div>
        <p></p>
    </div>
    <h3>Purchase</h3>
    <div>
        <p></p>
    </div>
</div>
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