<?php
/**
 * Class that operate on table 'municipios'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2013-10-20 21:45
 */
class MunicipiosMySqlDAO implements MunicipiosDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return MunicipiosMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM municipios WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM municipios';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM municipios ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param municipio primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM municipios WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param MunicipiosMySql municipio
 	 */
	public function insert($municipio){
		$sql = 'INSERT INTO municipios (estado_id, clave, nombre, sigla) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($municipio->estadoId);
		$sqlQuery->set($municipio->clave);
		$sqlQuery->set($municipio->nombre);
		$sqlQuery->set($municipio->sigla);

		$id = $this->executeInsert($sqlQuery);	
		$municipio->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param MunicipiosMySql municipio
 	 */
	public function update($municipio){
		$sql = 'UPDATE municipios SET estado_id = ?, clave = ?, nombre = ?, sigla = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($municipio->estadoId);
		$sqlQuery->set($municipio->clave);
		$sqlQuery->set($municipio->nombre);
		$sqlQuery->set($municipio->sigla);

		$sqlQuery->setNumber($municipio->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM municipios';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByEstadoId($value){
		$sql = 'SELECT * FROM municipios WHERE estado_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByClave($value){
		$sql = 'SELECT * FROM municipios WHERE clave = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNombre($value){
		$sql = 'SELECT * FROM municipios WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySigla($value){
		$sql = 'SELECT * FROM municipios WHERE sigla = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByEstadoId($value){
		$sql = 'DELETE FROM municipios WHERE estado_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByClave($value){
		$sql = 'DELETE FROM municipios WHERE clave = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNombre($value){
		$sql = 'DELETE FROM municipios WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySigla($value){
		$sql = 'DELETE FROM municipios WHERE sigla = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return MunicipiosMySql 
	 */
	protected function readRow($row){
		$municipio = new Municipio();
		
		$municipio->id = $row['id'];
		$municipio->estadoId = $row['estado_id'];
		$municipio->clave = $row['clave'];
		$municipio->nombre = $row['nombre'];
		$municipio->sigla = $row['sigla'];

		return $municipio;
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
	 * @return MunicipiosMySql 
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