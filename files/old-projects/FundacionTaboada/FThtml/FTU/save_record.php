<?php
//ini_set('display_errors', 0);

//include all DAO files
require_once('bin/include_dao.php');

if($_REQUEST['oper']=='add')
 {
	$summary = $_REQUEST['Summary'];
	$isActive = $_REQUEST['IsActive'];
	
	//start new transaction
	$transaction = new Transaction();
	
	$catNew = new CatNew();
	$catNew->summary = $summary;
	$catNew->isActive = $isActive;
	DAOFactory::getCatNewsDAO()->insert($catNew);
	
	//commit transaction
	$transaction->commit();  
 }
 if($_REQUEST['oper']=='edit')
 {
	$NewsID = $_REQUEST['id'];
	$summary = $_REQUEST['Summary'];
	$isActive = $_REQUEST['IsActive'];
	
	//start new transaction
	$transaction = new Transaction();
	
	//load row where primary key equal NewsID
	$catNew = DAOFactory::getCatNewsDAO()->load($NewsID);
	$catNew->summary = $summary;
	$catNew->isActive = $isActive;
	//update row
	DAOFactory::getCatNewsDAO()->update($catNew);
	
	//commit transaction
	$transaction->commit();  
 }
 
 if($_REQUEST['oper']=='del')
 {
    $NewsID = $_REQUEST['id'];
	
	//start new transaction
	$transaction = new Transaction();
		
	//delete row where primary key equal NewsID
	$rowsDeleted = DAOFactory::getCatNewsDAO()->delete($NewsID);
	
	//commit transaction
	$transaction->commit(); 
 }

?>
