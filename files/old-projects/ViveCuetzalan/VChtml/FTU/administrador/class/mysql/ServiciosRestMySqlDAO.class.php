<?php
/**
 * Class that operate on table 'servicios_rest'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-03-25 18:49
 */
class ServiciosRestMySqlDAO implements ServiciosRestDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ServiciosRestMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM servicios_rest WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM servicios_rest';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM servicios_rest ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param serviciosRest primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM servicios_rest WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ServiciosRestMySql serviciosRest
 	 */
	public function insert($serviciosRest){
		$sql = 'INSERT INTO servicios_rest (id_rest, descripcion, tarifa, dato_extra, comentarios) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($serviciosRest->idRest);
		$sqlQuery->set($serviciosRest->descripcion);
		$sqlQuery->set($serviciosRest->tarifa);
		$sqlQuery->setNumber($serviciosRest->datoExtra);
		$sqlQuery->set($serviciosRest->comentarios);

		$id = $this->executeInsert($sqlQuery);	
		$serviciosRest->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ServiciosRestMySql serviciosRest
 	 */
	public function update($serviciosRest){
		$sql = 'UPDATE servicios_rest SET id_rest = ?, descripcion = ?, tarifa = ?, dato_extra = ?, comentarios = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($serviciosRest->idRest);
		$sqlQuery->set($serviciosRest->descripcion);
		$sqlQuery->set($serviciosRest->tarifa);
		$sqlQuery->setNumber($serviciosRest->datoExtra);
		$sqlQuery->set($serviciosRest->comentarios);

		$sqlQuery->setNumber($serviciosRest->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM servicios_rest';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdRest($value){
		$sql = 'SELECT * FROM servicios_rest WHERE id_rest = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescripcion($value){
		$sql = 'SELECT * FROM servicios_rest WHERE descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTarifa($value){
		$sql = 'SELECT * FROM servicios_rest WHERE tarifa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDatoExtra($value){
		$sql = 'SELECT * FROM servicios_rest WHERE dato_extra = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByComentarios($value){
		$sql = 'SELECT * FROM servicios_rest WHERE comentarios = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdRest($value){
		$sql = 'DELETE FROM servicios_rest WHERE id_rest = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescripcion($value){
		$sql = 'DELETE FROM servicios_rest WHERE descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTarifa($value){
		$sql = 'DELETE FROM servicios_rest WHERE tarifa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDatoExtra($value){
		$sql = 'DELETE FROM servicios_rest WHERE dato_extra = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByComentarios($value){
		$sql = 'DELETE FROM servicios_rest WHERE comentarios = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ServiciosRestMySql 
	 */
	protected function readRow($row){
		$serviciosRest = new ServiciosRest();
		
		$serviciosRest->id = $row['id'];
		$serviciosRest->idRest = $row['id_rest'];
		$serviciosRest->descripcion = $row['descripcion'];
		$serviciosRest->tarifa = $row['tarifa'];
		$serviciosRest->datoExtra = $row['dato_extra'];
		$serviciosRest->comentarios = $row['comentarios'];

		return $serviciosRest;
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
	 * @return ServiciosRestMySql 
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