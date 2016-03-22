<?php
/**
 * Class that operate on table 'recorrido'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-04-01 22:30
 */
class RecorridoMySqlDAO implements RecorridoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return RecorridoMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM recorrido WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM recorrido';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM recorrido ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param recorrido primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM recorrido WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param RecorridoMySql recorrido
 	 */
	public function insert($recorrido){
		$sql = 'INSERT INTO recorrido (nombre, dirigidoa, duracion, incluye, recorrido, costo, minimo) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($recorrido->nombre);
		$sqlQuery->set($recorrido->dirigidoa);
		$sqlQuery->set($recorrido->duracion);
		$sqlQuery->set($recorrido->incluye);
		$sqlQuery->set($recorrido->recorrido);
		$sqlQuery->set($recorrido->costo);
		$sqlQuery->set($recorrido->minimo);

		$id = $this->executeInsert($sqlQuery);	
		$recorrido->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param RecorridoMySql recorrido
 	 */
	public function update($recorrido){
		$sql = 'UPDATE recorrido SET nombre = ?, dirigidoa = ?, duracion = ?, incluye = ?, recorrido = ?, costo = ?, minimo = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($recorrido->nombre);
		$sqlQuery->set($recorrido->dirigidoa);
		$sqlQuery->set($recorrido->duracion);
		$sqlQuery->set($recorrido->incluye);
		$sqlQuery->set($recorrido->recorrido);
		$sqlQuery->set($recorrido->costo);
		$sqlQuery->set($recorrido->minimo);

		$sqlQuery->setNumber($recorrido->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM recorrido';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByNombre($value){
		$sql = 'SELECT * FROM recorrido WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDirigidoa($value){
		$sql = 'SELECT * FROM recorrido WHERE dirigidoa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDuracion($value){
		$sql = 'SELECT * FROM recorrido WHERE duracion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIncluye($value){
		$sql = 'SELECT * FROM recorrido WHERE incluye = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRecorrido($value){
		$sql = 'SELECT * FROM recorrido WHERE recorrido = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCosto($value){
		$sql = 'SELECT * FROM recorrido WHERE costo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMinimo($value){
		$sql = 'SELECT * FROM recorrido WHERE minimo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByNombre($value){
		$sql = 'DELETE FROM recorrido WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDirigidoa($value){
		$sql = 'DELETE FROM recorrido WHERE dirigidoa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDuracion($value){
		$sql = 'DELETE FROM recorrido WHERE duracion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIncluye($value){
		$sql = 'DELETE FROM recorrido WHERE incluye = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRecorrido($value){
		$sql = 'DELETE FROM recorrido WHERE recorrido = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCosto($value){
		$sql = 'DELETE FROM recorrido WHERE costo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMinimo($value){
		$sql = 'DELETE FROM recorrido WHERE minimo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return RecorridoMySql 
	 */
	protected function readRow($row){
		$recorrido = new Recorrido();
		
		$recorrido->id = $row['id'];
		$recorrido->nombre = $row['nombre'];
		$recorrido->dirigidoa = $row['dirigidoa'];
		$recorrido->duracion = $row['duracion'];
		$recorrido->incluye = $row['incluye'];
		$recorrido->recorrido = $row['recorrido'];
		$recorrido->costo = $row['costo'];
		$recorrido->minimo = $row['minimo'];

		return $recorrido;
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
	 * @return RecorridoMySql 
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