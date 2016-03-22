<?php
require_once("admin/models/config.php");
include_once('admin/config.php');
include_once("lib/db.php");

$db = new DB;
$db->Connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$imagenes_sql = 'SELECT * FROM imagen ORDER BY fecha DESC LIMIT 50';
$imagenes_rs = $db->Query($imagenes_sql);

if ($db->NumRows($imagenes_rs) > 0){
while ($imagen = $db->FetchArray($imagenes_rs)){
echo "<li><img src='", URL , 'imagenes/' , $imagen['guid'] , "' alt='", $imagen['leyenda'] ,"'><span>", $imagen['descripcion'] ,"</span></li>";
}
}
?>	