<?php
/**
 * Class that operate on table 'ElementoReporte'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2013-10-14 21:45
 */
class ElementoReporteMySqlDAO implements ElementoReporteDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ElementoReporteMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM ElementoReporte WHERE Id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM ElementoReporte';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM ElementoReporte ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param elementoReporte primary key
 	 */
	public function delete($Id){
		$sql = 'DELETE FROM ElementoReporte WHERE Id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($Id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ElementoReporteMySql elementoReporte
 	 */
	public function insert($elementoReporte){
		$sql = 'INSERT INTO ElementoReporte (IdReporte, Descripcion, Tipo, Timestamp) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($elementoReporte->idReporte);
		$sqlQuery->set($elementoReporte->descripcion);
		$sqlQuery->set($elementoReporte->tipo);
		$sqlQuery->set($elementoReporte->timestamp);

		$id = $this->executeInsert($sqlQuery);	
		$elementoReporte->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ElementoReporteMySql elementoReporte
 	 */
	public function update($elementoReporte){
		$sql = 'UPDATE ElementoReporte SET IdReporte = ?, Descripcion = ?, Tipo = ?, Timestamp = ? WHERE Id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($elementoReporte->idReporte);
		$sqlQuery->set($elementoReporte->descripcion);
		$sqlQuery->set($elementoReporte->tipo);
		$sqlQuery->set($elementoReporte->timestamp);

		$sqlQuery->set($elementoReporte->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM ElementoReporte';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdReporte($value){
		$sql = 'SELECT * FROM ElementoReporte WHERE IdReporte = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescripcion($value){
		$sql = 'SELECT * FROM ElementoReporte WHERE Descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTipo($value){
		$sql = 'SELECT * FROM ElementoReporte WHERE Tipo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTimestamp($value){
		$sql = 'SELECT * FROM ElementoReporte WHERE Timestamp = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdReporte($value){
		$sql = 'DELETE FROM ElementoReporte WHERE IdReporte = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescripcion($value){
		$sql = 'DELETE FROM ElementoReporte WHERE Descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTipo($value){
		$sql = 'DELETE FROM ElementoReporte WHERE Tipo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTimestamp($value){
		$sql = 'DELETE FROM ElementoReporte WHERE Timestamp = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ElementoReporteMySql 
	 */
	protected function readRow($row){
		$elementoReporte = new ElementoReporte();
		
		$elementoReporte->id = $row['Id'];
		$elementoReporte->idReporte = $row['IdReporte'];
		$elementoReporte->descripcion = $row['Descripcion'];
		$elementoReporte->tipo = $row['Tipo'];
		$elementoReporte->timestamp = $row['Timestamp'];

		return $elementoReporte;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return ElementoReporteMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>