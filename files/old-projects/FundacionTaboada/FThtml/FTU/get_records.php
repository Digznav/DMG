<?php
ini_set('display_errors', 0);

//include all DAO files
require_once('bin/include_dao.php');

$page = $_REQUEST['page']; // get the requested page
$limit = $_REQUEST['rows']; // get how many rows we want to have into the grid
$sidx = $_REQUEST['sidx']; // get index row - i.e. user click to sort
$sord = $_REQUEST['sord']; // get the direction
if(!$sidx) $sidx =1;

$totalrows = isset($_REQUEST['totalrows']) ? $_REQUEST['totalrows']: false;
if($totalrows) {
	$limit = $totalrows;
}

$count = DAOFactory::getCatNewsDAO()->getNumberOfRecordGrid();

if( $count >0 ) {
	$total_pages = ceil($count/$limit);
} else {
	$total_pages = 0;
}
if ($page > $total_pages) $page=$total_pages;
if ($limit<0) $limit = 0;
$start = $limit*$page - $limit; // do not put $limit*($page - 1)
if ($start<0) $start = 0;

$arr = DAOFactory::getCatNewsDAO()->queryGetRecordsGrid($sidx, $sord, $start, $limit);

$responce->page = $page;
$responce->total = $total_pages;
$responce->records = $count;

for($i=0;$i<count($arr);$i++){
	$row = $arr[$i];
	$responce->rows[$i]['id']=$row->newsID;
    $responce->rows[$i]['cell']=array($row->newsID,$row->summary,$row->isActive);
}
echo json_encode($responce);


?>
