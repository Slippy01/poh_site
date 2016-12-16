<?php 
require_once 'lib.php';
//echo getIdMenu();

session_start();
if(!isset($_SESSION['cart'])){
	$_SESSION['cart']=array();
}

$smarty->assign('cartCntItems', count($_SESSION['cart']));
?>

<!DOCTYPE html>
<html>
<head>
	<!--  <meta charset="utf-8" /> -->
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
	<title></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="style.css" rel="stylesheet">
	
	<script type="text/javascript" src="poh.js"></script>
	<script type="text/javascript" src="Main.js"></script>
	<!--<script type="text/javascript" src="jquery-1.7.1.min.js"></script>-->
	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<<<<<<< HEAD
<?php 	/*
<script type="text/javascript">
=======
	<script type="text/javascript">
<?php
>>>>>>> origin/master
$(document).ready(function(){
$(window).scroll(function(){
if ($(this).scrollTop() > 100) {
$('.scrollup').fadeIn();
} else {
$('.scrollup').fadeOut();
}
});
 
$('.scrollup').click(function(){
$("html, body").animate({ scrollTop: 0 }, 600);
return false;
});
 
});
<<<<<<< HEAD
</script> */
?>
=======
?>
</script>

>>>>>>> origin/master
</head>

<body>

<div class="wrapper">

	<header class="header">
		<a href="index.php" target="_self">
		<img alt="header img MISS 8_(" src="img/shapka.png" border="0" width="980" height="150" />
		</a>
	</header><!-- .header-->

	<div class="vmenu">
		<div class="wall-of-buttons">
		<a class="large green button" href="index.php" target="_self">Главная</a>
<<<<<<< HEAD
		<a class="large blue button" href="index.php?id=1" target="_self">Товары </a>
		<span id="cartCntItems"><?php if($cartCntItems > 0){echo $cartCntItems;}else{echo "";}?></span>
=======
		<a class="large blue button" href="index.php?id=1" target="_self">Товары </a><span id="cartCntItems"><?php if($cartCntItems > 0){echo $cartCntItems;}else{echo "";}?></span>
>>>>>>> origin/master
		<a class="large magenta button" href="index.php?id=2" target="_self">Заказать</a>
		<a class="large red button" href="index.php?id=3" target="_self">FAQ</a>
		</div>
	</div>


	<div class="middle">

		<div class="container">
			<main class="content">
				<div class='sheet'>
				<div class='sheet1'></div>
				<div class='sheet2'>
				
				
				
				<?php 
				$id_menu=getIdMenu();
				if($id_menu==1)
				{
					makeOpisan();
				}
				else if($id_menu==0)
				{
					getHTML(6);
				}
				else if($id_menu==3)
				{
					getHTML(7);
				}
				?>
				</div>
				<div class='sheet3'></div>
				</div>
			</main><!-- .content -->
		</div><!-- .container-->

		<?php 
		getHTML(getIdMenu()+1);
		?>

		
		<?php 
		getHTML(5);
		?>
			
		

	</div><!-- .middle-->

</div><!-- .wrapper -->

<footer class="footer">
	<img alt="podval img MISS 8_(" src="img/podval.png" border="0" width="980" height="50" />
</footer><!-- .footer -->
<!-- <a href="#" class="scrollup">Наверх</a> -->
</body>
</html>