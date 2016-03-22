<?php
/**
 * Class that operate on table 'localidades'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2013-10-20 21:45
 */
class LocalidadesMySqlDAO implements LocalidadesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return LocalidadesMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM localidades WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM localidades';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM localidades ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param localidade primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM localidades WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param LocalidadesMySql localidade
 	 */
	public function insert($localidade){
		$sql = 'INSERT INTO localidades (municipio_id, clave, nombre, latitud, longitud, altitud) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($localidade->municipioId);
		$sqlQuery->set($localidade->clave);
		$sqlQuery->set($localidade->nombre);
		$sqlQuery->set($localidade->latitud);
		$sqlQuery->set($localidade->longitud);
		$sqlQuery->set($localidade->altitud);

		$id = $this->executeInsert($sqlQuery);	
		$localidade->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param LocalidadesMySql localidade
 	 */
	public function update($localidade){
		$sql = 'UPDATE localidades SET municipio_id = ?, clave = ?, nombre = ?, latitud = ?, longitud = ?, altitud = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($localidade->municipioId);
		$sqlQuery->set($localidade->clave);
		$sqlQuery->set($localidade->nombre);
		$sqlQuery->set($localidade->latitud);
		$sqlQuery->set($localidade->longitud);
		$sqlQuery->set($localidade->altitud);

		$sqlQuery->setNumber($localidade->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM localidades';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByMunicipioId($value){
		$sql = 'SELECT * FROM localidades WHERE municipio_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByClave($value){
		$sql = 'SELECT * FROM localidades WHERE clave = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNombre($value){
		$sql = 'SELECT * FROM localidades WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLatitud($value){
		$sql = 'SELECT * FROM localidades WHERE latitud = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLongitud($value){
		$sql = 'SELECT * FROM localidades WHERE longitud = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAltitud($value){
		$sql = 'SELECT * FROM localidades WHERE altitud = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByMunicipioId($value){
		$sql = 'DELETE FROM localidades WHERE municipio_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByClave($value){
		$sql = 'DELETE FROM localidades WHERE clave = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNombre($value){
		$sql = 'DELETE FROM localidades WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLatitud($value){
		$sql = 'DELETE FROM localidades WHERE latitud = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLongitud($value){
		$sql = 'DELETE FROM localidades WHERE longitud = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAltitud($value){
		$sql = 'DELETE FROM localidades WHERE altitud = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return LocalidadesMySql 
	 */
	protected function readRow($row){
		$localidade = new Localidade();
		
		$localidade->id = $row['id'];
		$localidade->municipioId = $row['municipio_id'];
		$localidade->clave = $row['clave'];
		$localidade->nombre = $row['nombre'];
		$localidade->latitud = $row['latitud'];
		$localidade->longitud = $row['longitud'];
		$localidade->altitud = $row['altitud'];

		return $localidade;
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
	 * @return LocalidadesMySql 
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