<?php
$sqlhoteles = mysql_query("SELECT * FROM hotel")or die(mysql_error());
$k=0;
while ($reshotel = mysql_fetch_array($sqlhoteles)) {
	$resulthotel[$k] = $reshotel;
	$k++;
}
?>