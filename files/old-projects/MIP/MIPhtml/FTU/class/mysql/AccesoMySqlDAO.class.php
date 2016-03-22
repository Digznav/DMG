<?php
/**
 * Class that operate on table 'Acceso'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2013-11-06 23:13
 */
class AccesoMySqlDAO implements AccesoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AccesoMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM Acceso WHERE usuario = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM Acceso';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM Acceso ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param acceso primary key
 	 */
	public function delete($usuario){
		$sql = 'DELETE FROM Acceso WHERE usuario = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($usuario);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AccesoMySql acceso
 	 */
	public function insert($acceso){
		$sql = 'INSERT INTO Acceso (usuario, contrasenia, rol) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($acceso->usuario);
		$sqlQuery->set($acceso->contrasenia);
		$sqlQuery->set($acceso->rol);

		$id = $this->executeInsert($sqlQuery);	
		$acceso->usuario = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AccesoMySql acceso
 	 */
	public function update($acceso){
		$sql = 'UPDATE Acceso SET contrasenia = ?, rol = ? WHERE usuario = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($acceso->contrasenia);
		$sqlQuery->set($acceso->rol);

		$sqlQuery->set($acceso->usuario);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM Acceso';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByContrasenia($value){
		$sql = 'SELECT * FROM Acceso WHERE contrasenia = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRol($value){
		$sql = 'SELECT * FROM Acceso WHERE rol = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByContrasenia($value){
		$sql = 'DELETE FROM Acceso WHERE contrasenia = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRol($value){
		$sql = 'DELETE FROM Acceso WHERE rol = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AccesoMySql 
	 */
	protected function readRow($row){
		$acceso = new Acceso();
		
		$acceso->usuario = $row['usuario'];
		$acceso->contrasenia = $row['contrasenia'];
		$acceso->rol = $row['rol'];

		return $acceso;
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
	 * @return AccesoMySql 
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