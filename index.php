<?php 
require_once 'lib.php';
//echo getIdMenu();
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
		<a class="large blue button" href="index.php?id=1" target="_self">Товары</a>
		<a class="large magenta button" href="index.php?id=2" target="_self">Заказать</a>
		<a class="large red button" href="index.php?id=3" target="_self">Контакты</a>
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
				
				?>
				</div>
				<div class='sheet3'></div>
				</div>
			</main><!-- .content -->
		</div><!-- .container-->

		<?php 
		getHTML(getHTML()+1);
		?>

		<aside class="right-sidebar">
			<strong>Right Sidebar:</strong> Integer velit. Vestibulum nisi nunc, accumsan ut, vehicula sit amet, porta a, mi. Nam nisl tellus, placerat eget, posuere eget, egestas eget, dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In elementum urna a eros. Integer iaculis. Maecenas vel elit.
		</aside><!-- .right-sidebar -->

	</div><!-- .middle-->

</div><!-- .wrapper -->

<footer class="footer">
	<img alt="podval img MISS 8_(" src="img/podval.png" border="0" width="980" height="50" />
</footer><!-- .footer -->

</body>
</html>