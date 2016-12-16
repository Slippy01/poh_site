<?php
ini_set('display_errors', 0);
error_reporting(0);

define("ServerName", "mysql.hostinger.ru");
define("UserLogin", "u852109372_root");
define("UserPassword", "199402");
define("DbName", "u852109372_poh");

function makeOpisan()
{
	$db=mysql_connect(ServerName,UserLogin,UserPassword)
	or die ('Not connected1 : ' . mysql_error());
	if($db){
		if(mysql_select_db(DbName,$db))
		{
			mysql_query("SET names 'cp1251'",$db);
			
			$rez = mysql_query("SELECT * FROM opisan",$db);
			
			$out_page ="";
			
			for($i=0;$i<10;$i++)
			{
				$row= mysql_fetch_row($rez);
				$id=$row[0];
				$naim=$row[1];
				$txt=$row[2];
				$img=$row[3];
				$out_page .= "<h1 class='h1_opisan'>{$naim}</h1><br>".
				"<div class= 'div_opisan'><img class='img_opisan' src='{$img}'><a id='addCart_{$id}' href='#' onClick='addToCart({$id}); return false;' alt='Добавить в корзину'>Добавить в корзину</a><br>{$txt}</div><br/>";
			}
			//mysql_query("INSERT INTO tovar (nami,kol) VALUES (1,10)");
			echo $out_page;
		}
		mysql_close($db);
	}
	else
	{
		//echo "ERROR_1";
	}	
}


function getIdMenu()
{
	$tmp =0;
	if($_GET)
	{
		if($_GET["id"])
		{
			$tmp = $_GET["id"];
		}
		
		if(!($tmp>=1)&&($tmp<=3))
		{
			$tmp=0;
		}
	}
	return $tmp;
}


function getHTML($nom)
{
	$html ="";
	
	$db=mysql_connect(ServerName,UserLogin,UserPassword)
	or die ('Not connected1 : ' . mysql_error());
	
	if($db){
		if(mysql_select_db(DbName,$db))
		{
			mysql_query("SET names 'cp1251'",$db);
				
			$rez = mysql_query("SELECT * FROM razmetka WHERE (id={$nom})");
			$kol_str= mysql_num_rows($rez);	
			if($kol_str==1)
			{
				$row = mysql_fetch_row($rez);
				$html= $row[1];
			}
		}
		mysql_close($db);
	}
	echo $html;
}

?>