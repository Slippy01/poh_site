<?php
ini_set('display_errors', 0);
error_reporting(0);

define("ServerName", "mysql.hostinger.ru");
define("UserLogin", "u852109372_root");
define("UserPassword", "199402");
define("DbName", "u852109372_poh");

function makeOpisan()
{
	$db=mysql_connect("ServerName","UserLogin","UserPassword")
	or die ('Not connected1 : ' . mysql_error());
	if($db){
		if(mysql_select_db("DbName",$db))
		{
			mysql_query("SET names 'utf8'",$db);
			
			$rez = mysql_query("SELECT * FROM opisan",$db);
			
			$out_page ="";
			
			for($i=0;$i<10;$i++)
			{
				$row= mysql_fetch_row($rez);
				$naim=$row[1];
				$txt=$row[2];
				$out_page .= "<h1 class='h1_opisan'>($naim)</h1>".
				"<div class= 'div_opisan'>($txt)</div><br/>";
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

?>