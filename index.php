<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Jimmy Baraglia
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Workshop on Human-aligned Reinforcement Learning for Autonomous Agents and Robots</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		// Set trigger and container variables
		var trigger = $('#topnav ul li a'),
			container = $('#content');

		// Fire on click
		trigger.on('click', function(){
		  // Set $this for re-use. Set target from data attribute
		  var $this = $(this),
			target = $this.data('target');       
		  
		  // Load target page into container
		  container.load(target + '.php');
		  
		  // Stop normal link behavior
		  return false;
		});
	});
</script>
<!-- End Homepage Specific Elements -->
<link rel='shortcut icon' href='favicon.ico' type='image/x-icon'/ >
</head>
<body id="top">
<?php include_once("analyticstracking.php") ?>

<center>
<img src="images/header.jpg" alt="Logo" height="276px" width="auto" style="float: center; border: solid 1px #000000; margin:10px;">

<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div class="rnd">
    <!-- ###### -->
    <div id="topnav">
      <ul>
        <li><a style="font-size: 20px" href="#" data-target="home">Home</a></li>
	<li><a style="font-size: 20px" href="organizers.php" data-target="organizers">Organizers</a></li>
        <li><a style="font-size: 20px" href="speakers.php" data-target="speakers">Speakers</a></li>
        <li><a style="font-size: 20px" href="cfp.php" data-target="cfp">Submissions</a></li>
        <li><a style="font-size: 20px" href="program.php" data-target="program">Program</a></li>
        <li><a style="font-size: 20px" href="contact.php" data-target="contact">Contact</a></li>
      </ul>
    </div>
    <!-- ###### -->
  </div>
</div>

<div class="wrapper row3">
  <div class="rnd">
    <div id="container " class="clear text-center">
      <!-- ####################################################################################################### -->
		<div id="content" style="width:95%; text-align:center; margin:10px">
			<?php include('home.php'); ?>
		</div>
      <!-- ####################################################################################################### -->
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div class="rnd">
    <div id="footer" class="clear">
      <p> Workshop on Human-aligned Reinforcement Learning for Autonomous Agents and Robots - In conjunction with <a target="blank" href="https://icdl-2021.org">IEEE ICDL 2021</a>
<p>
<div style="height: 200px; margin: auto;">
	
	<a target="blank" href="https://www.deakin.edu.au"><img src="images/deakin.png" alt="Deakin University" height="80px" width="auto" style="float: center; margin:10px;"></a>
	<a target="blank" href="https://www.unab.cl"><img src="images/unab.png" alt="Universidad Andres Bello" height="80px" width="auto" style="float: center; margin:10px;"></a>
	<a target="blank" href="https://www.iit.it"><img src="images/iit.png" alt="Istituto Italiano di Tecnologia" height="80px" width="auto" style="float: center; margin:10px;"></a>

	</div>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
</body>
</html>
