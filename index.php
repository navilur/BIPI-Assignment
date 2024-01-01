<?php
session_start();
include_once 'libs/url.php';
include_once 'apps/config/connection.php';
include_once 'apps/config/function.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Project of bteb</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo URL.'/apps/css/BTEB.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo URL.'/apps/css/adminlogin.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo URL.'/apps/css/custom.css'?>">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<script src="https://use.fontawesome.com/6c0b2c8d9a.js"></script>
	<script src="<?php echo URL.'/apps/js/jquery.js'?>"></script>
	<script src="<?php echo URL.'/apps/js/login.js'?>"></script>


 <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

 <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>


</head>
<body>

<div class="background-page">

<div class="background-page1">

<div class="container">
<header>
	
		<div class="header-left">
			<img src="apps/images/logo.png" alt="" class="logo">
			</div>

		<div class="header-right">
		  <img src="apps/images/banner_right.jpg" alt="" class="logo">	
		</div>
	
</header>




<nav>

	<ul>
			<li><a href="<?php echo URL.'/home'?>">Home</a></li>
			<li><a href="<?php echo URL.'/contact'?>">Contacts Us</a></li>
			<li><a href="<?php echo URL.'/search'?>">Searce</a></li>
			<li><a href="">Links</a></li>
			<li><a href="<?php echo URL.'/notice'?>">Notic</a></li>
			<li><a href="<?php echo URL.'/syllabus'?>">Syllabus</a></li>
			<li><a href="<?php echo URL.'/result'?>">Result</a></li>
		</ul>

</nav>



<marquee><p>* * * * আগামী ০৩/৯/২০১৬ তারিখে অত্র বোর্ডের আওতাধীন সকল শিক্ষা প্রতিষ্ঠান প্রধানগণকে জংঙ্গিবাদ ও সন্ত্রাসবিরোধী সভা আয়োজন করার জন্য অনুরোধ করা</p></marquee>



<div class="content">

<?php





if(isset($_GET['user'])){
	 $url = $_GET['user'];
	 $url = rtrim($_GET['user'],"/");
	 $url = explode("/", $url);

	if(file_exists('apps/user/'.$url[0].'.php')){
		include_once 'apps/user/'.$url[0].'.php';
	}
	else
	{
		include_once 'apps/user/404.php';
	}
}
else
{
	include_once 'apps/user/home.php';
}



?>



</div>
</div>





<div class="footer">
	<ul>
			<li><a href="">Home</a></li>
			<li><a href="">Contacts Us</a></li>
			<li><a href="">Searce</a></li>
			<li><a href="">Links</a></li>
			<li><a href="">Notic</a></li>
			<li><a href="">Syllabus</a></li>
			<li><a href="">Result</a></li>
		</ul>

	<h1> © Copy Right By: Md Enamul Haque </h1>
</div>

</div>


</div>



</body>




</html>