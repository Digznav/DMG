<?php
/**
 * Class that operate on table 'restaurantes'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-03-25 18:49
 */
class RestaurantesMySqlDAO implements RestaurantesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return RestaurantesMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM restaurantes WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM restaurantes';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM restaurantes ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param restaurante primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM restaurantes WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param RestaurantesMySql restaurante
 	 */
	public function insert($restaurante){
		$sql = 'INSERT INTO restaurantes (nombre, descripcion, correo, logo, foto_hd) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($restaurante->nombre);
		$sqlQuery->set($restaurante->descripcion);
		$sqlQuery->set($restaurante->correo);
		$sqlQuery->set($restaurante->logo);
		$sqlQuery->set($restaurante->fotoHd);

		$id = $this->executeInsert($sqlQuery);	
		$restaurante->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param RestaurantesMySql restaurante
 	 */
	public function update($restaurante){
		$sql = 'UPDATE restaurantes SET nombre = ?, descripcion = ?, correo = ?, logo = ?, foto_hd = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($restaurante->nombre);
		$sqlQuery->set($restaurante->descripcion);
		$sqlQuery->set($restaurante->correo);
		$sqlQuery->set($restaurante->logo);
		$sqlQuery->set($restaurante->fotoHd);

		$sqlQuery->setNumber($restaurante->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM restaurantes';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByNombre($value){
		$sql = 'SELECT * FROM restaurantes WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescripcion($value){
		$sql = 'SELECT * FROM restaurantes WHERE descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCorreo($value){
		$sql = 'SELECT * FROM restaurantes WHERE correo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLogo($value){
		$sql = 'SELECT * FROM restaurantes WHERE logo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFotoHd($value){
		$sql = 'SELECT * FROM restaurantes WHERE foto_hd = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByNombre($value){
		$sql = 'DELETE FROM restaurantes WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescripcion($value){
		$sql = 'DELETE FROM restaurantes WHERE descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCorreo($value){
		$sql = 'DELETE FROM restaurantes WHERE correo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLogo($value){
		$sql = 'DELETE FROM restaurantes WHERE logo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFotoHd($value){
		$sql = 'DELETE FROM restaurantes WHERE foto_hd = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return RestaurantesMySql 
	 */
	protected function readRow($row){
		$restaurante = new Restaurante();
		
		$restaurante->id = $row['id'];
		$restaurante->nombre = $row['nombre'];
		$restaurante->descripcion = $row['descripcion'];
		$restaurante->correo = $row['correo'];
		$restaurante->logo = $row['logo'];
		$restaurante->fotoHd = $row['foto_hd'];

		return $restaurante;
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
	 * @return RestaurantesMySql 
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