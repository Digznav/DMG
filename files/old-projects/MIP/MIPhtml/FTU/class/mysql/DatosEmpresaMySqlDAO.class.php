<?php
/**
 * Class that operate on table 'DatosEmpresa'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2013-10-14 21:45
 */
class DatosEmpresaMySqlDAO implements DatosEmpresaDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return DatosEmpresaMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM DatosEmpresa WHERE Id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM DatosEmpresa';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM DatosEmpresa ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param datosEmpresa primary key
 	 */
	public function delete($Id){
		$sql = 'DELETE FROM DatosEmpresa WHERE Id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($Id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DatosEmpresaMySql datosEmpresa
 	 */
	public function insert($datosEmpresa){
		$sql = 'INSERT INTO DatosEmpresa (idCliente, Nombre, Direccion, idCiudad, idMpio, idEstado, CP) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($datosEmpresa->idCliente);
		$sqlQuery->set($datosEmpresa->nombre);
		$sqlQuery->set($datosEmpresa->direccion);
		$sqlQuery->setNumber($datosEmpresa->idCiudad);
		$sqlQuery->setNumber($datosEmpresa->idMpio);
		$sqlQuery->setNumber($datosEmpresa->idEstado);
		$sqlQuery->set($datosEmpresa->cP);

		$id = $this->executeInsert($sqlQuery);	
		$datosEmpresa->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param DatosEmpresaMySql datosEmpresa
 	 */
	public function update($datosEmpresa){
		$sql = 'UPDATE DatosEmpresa SET idCliente = ?, Nombre = ?, Direccion = ?, idCiudad = ?, idMpio = ?, idEstado = ?, CP = ? WHERE Id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($datosEmpresa->idCliente);
		$sqlQuery->set($datosEmpresa->nombre);
		$sqlQuery->set($datosEmpresa->direccion);
		$sqlQuery->setNumber($datosEmpresa->idCiudad);
		$sqlQuery->setNumber($datosEmpresa->idMpio);
		$sqlQuery->setNumber($datosEmpresa->idEstado);
		$sqlQuery->set($datosEmpresa->cP);

		$sqlQuery->setString($datosEmpresa->id);
		
//		echo "SQL=[".$sqlQuery->getQuery()."]";
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM DatosEmpresa';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdCliente($value){
		$sql = 'SELECT * FROM DatosEmpresa WHERE idCliente = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNombre($value){
		$sql = 'SELECT * FROM DatosEmpresa WHERE Nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDireccion($value){
		$sql = 'SELECT * FROM DatosEmpresa WHERE Direccion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdCiudad($value){
		$sql = 'SELECT * FROM DatosEmpresa WHERE idCiudad = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdMpio($value){
		$sql = 'SELECT * FROM DatosEmpresa WHERE idMpio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdEstado($value){
		$sql = 'SELECT * FROM DatosEmpresa WHERE idEstado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCP($value){
		$sql = 'SELECT * FROM DatosEmpresa WHERE CP = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdCliente($value){
		$sql = 'DELETE FROM DatosEmpresa WHERE idCliente = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNombre($value){
		$sql = 'DELETE FROM DatosEmpresa WHERE Nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDireccion($value){
		$sql = 'DELETE FROM DatosEmpresa WHERE Direccion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdCiudad($value){
		$sql = 'DELETE FROM DatosEmpresa WHERE idCiudad = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdMpio($value){
		$sql = 'DELETE FROM DatosEmpresa WHERE idMpio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdEstado($value){
		$sql = 'DELETE FROM DatosEmpresa WHERE idEstado = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCP($value){
		$sql = 'DELETE FROM DatosEmpresa WHERE CP = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return DatosEmpresaMySql 
	 */
	protected function readRow($row){
		$datosEmpresa = new DatosEmpresa();
		
		$datosEmpresa->id = $row['Id'];
		$datosEmpresa->idCliente = $row['idCliente'];
		$datosEmpresa->nombre = $row['Nombre'];
		$datosEmpresa->direccion = $row['Direccion'];
		$datosEmpresa->idCiudad = $row['idCiudad'];
		$datosEmpresa->idMpio = $row['idMpio'];
		$datosEmpresa->idEstado = $row['idEstado'];
		$datosEmpresa->cP = $row['CP'];

		return $datosEmpresa;
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
	 * @return DatosEmpresaMySql 
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