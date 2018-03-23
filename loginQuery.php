<?php include_once("db.php"); session_start(); ?>

<?php  

	$check="";
	$temp=true;
	
	if (isset($_POST['submit'])) {
		
		
		
		if (empty($_POST['na']) || empty($_POST['pa'])) {
			$temp=false;
		}
		else{
			
			$check=true; 
			
			$uname = $_POST['na'];
			$upass = $_POST['pa'];
			
			$sql = " SELECT COUNT(*) FROM users WHERE( name='".$uname."' AND password='".$upass."') ";

			$qury = mysql_query($sql);


			$result = mysql_fetch_array($qury);
			
			if($result[0]>0){
				$_SESSION['userName'] = $uname;				
			}
			else{
				$check=false;
			}
		}
	}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shopping Dunia</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	
	<header id="header"><!--header-->
				
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logo-1.png" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">								
								<li><a href="#"><b><?php if($check==true){echo "Welcome&nbsp;".$_SESSION['userName']."!";}else{echo "";}?></b><a/></li>								
								<li><a href="logout.php"><?php if($check==true){echo "Logout";}else{echo "";}?><a/></li>								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Home</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
				
				<h1>
					<?php
						if($check==true && $temp==true){
							echo "Successfully Login!";
						}
						else{
							echo "Wrong ID or PASSWORD!<br/>";
							echo "<a href='login.php'>LOGIN</a>";
						}
					?>
				</h1>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	

    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>