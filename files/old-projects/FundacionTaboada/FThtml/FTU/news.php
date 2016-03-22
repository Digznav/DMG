<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>News</title>
<link rel="stylesheet" type="text/css" media="screen" href="css/cupertino/jquery-ui-1.10.3.custom.css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/ui.jqgrid.css" />
<style type="text/css">
html, body {
  margin: 0;
  padding: 0;
  font-size: 75%;
}
</style>
<script src="js/jquery-1.9.1.js" type="text/javascript"></script>
<script src="js/i18n/grid.locale-en.js" type="text/javascript"></script>
<script src="js/jquery.jqGrid.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){ 
  $("#list").jqGrid({
   	url:'get_records.php',
	datatype: "json",
	height: 255,
	width: 600,
   	colNames:['id','Summary', 'Is Active'],
   	colModel:[
   		{name:'NewsID',index:'NewsID', width:65, editable:true, editoptions:{readonly:true}, sorttype:'int'},
   		{name:'Summary',index:'Summary', width:150, editable:true,},
   		{name:'IsActive',index:'IsActive', width:100, editable:true,}
   	],
   	rowNum:50,
	rowTotal: 2000,
	rowList : [20,30,50],
	loadonce:true,
   	mtype: "GET",
	rownumbers: true,
	rownumWidth: 40,
	gridview: true,
   	pager: '#pager',
   	sortname: 'NewsID',
    viewrecords: true,
    sortorder: "asc",
	editurl:'save_record.php',
});
jQuery("#list").jqGrid('navGrid','#pager',{edit:true,add:true,del:true});
	
}); 
</script>
</head>

<body>
<table id="list"><tr><td/></tr></table> 
<div id="pager"></div> 


</body>
</html>