<?php
/**
 * Class that operate on table 'imagenes'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-04-01 22:30
 */
class ImagenesMySqlDAO implements ImagenesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ImagenesMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM imagenes WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM imagenes';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM imagenes ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param imagene primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM imagenes WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ImagenesMySql imagene
 	 */
	public function insert($imagene){
		$sql = 'INSERT INTO imagenes (id_recorrido, url_imagen) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($imagene->idRecorrido);
		$sqlQuery->set($imagene->urlImagen);

		$id = $this->executeInsert($sqlQuery);	
		$imagene->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ImagenesMySql imagene
 	 */
	public function update($imagene){
		$sql = 'UPDATE imagenes SET id_recorrido = ?, url_imagen = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($imagene->idRecorrido);
		$sqlQuery->set($imagene->urlImagen);

		$sqlQuery->setNumber($imagene->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM imagenes';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdRecorrido($value){
		$sql = 'SELECT * FROM imagenes WHERE id_recorrido = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUrlImagen($value){
		$sql = 'SELECT * FROM imagenes WHERE url_imagen = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdRecorrido($value){
		$sql = 'DELETE FROM imagenes WHERE id_recorrido = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUrlImagen($value){
		$sql = 'DELETE FROM imagenes WHERE url_imagen = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ImagenesMySql 
	 */
	protected function readRow($row){
		$imagene = new Imagene();
		
		$imagene->id = $row['id'];
		$imagene->idRecorrido = $row['id_recorrido'];
		$imagene->urlImagen = $row['url_imagen'];

		return $imagene;
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
	 * @return ImagenesMySql 
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