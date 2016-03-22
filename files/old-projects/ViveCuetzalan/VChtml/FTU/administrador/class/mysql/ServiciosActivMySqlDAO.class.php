<?php
/**
 * Class that operate on table 'servicios_activ'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-03-25 18:49
 */
class ServiciosActivMySqlDAO implements ServiciosActivDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ServiciosActivMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM servicios_activ WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM servicios_activ';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM servicios_activ ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param serviciosActiv primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM servicios_activ WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ServiciosActivMySql serviciosActiv
 	 */
	public function insert($serviciosActiv){
		$sql = 'INSERT INTO servicios_activ (id_activ, descripcion, tarifa, dato_extra, comentarios) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($serviciosActiv->idActiv);
		$sqlQuery->set($serviciosActiv->descripcion);
		$sqlQuery->set($serviciosActiv->tarifa);
		$sqlQuery->setNumber($serviciosActiv->datoExtra);
		$sqlQuery->set($serviciosActiv->comentarios);

		$id = $this->executeInsert($sqlQuery);	
		$serviciosActiv->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ServiciosActivMySql serviciosActiv
 	 */
	public function update($serviciosActiv){
		$sql = 'UPDATE servicios_activ SET id_activ = ?, descripcion = ?, tarifa = ?, dato_extra = ?, comentarios = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($serviciosActiv->idActiv);
		$sqlQuery->set($serviciosActiv->descripcion);
		$sqlQuery->set($serviciosActiv->tarifa);
		$sqlQuery->setNumber($serviciosActiv->datoExtra);
		$sqlQuery->set($serviciosActiv->comentarios);

		$sqlQuery->setNumber($serviciosActiv->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM servicios_activ';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdActiv($value){
		$sql = 'SELECT * FROM servicios_activ WHERE id_activ = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescripcion($value){
		$sql = 'SELECT * FROM servicios_activ WHERE descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTarifa($value){
		$sql = 'SELECT * FROM servicios_activ WHERE tarifa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDatoExtra($value){
		$sql = 'SELECT * FROM servicios_activ WHERE dato_extra = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByComentarios($value){
		$sql = 'SELECT * FROM servicios_activ WHERE comentarios = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdActiv($value){
		$sql = 'DELETE FROM servicios_activ WHERE id_activ = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescripcion($value){
		$sql = 'DELETE FROM servicios_activ WHERE descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTarifa($value){
		$sql = 'DELETE FROM servicios_activ WHERE tarifa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDatoExtra($value){
		$sql = 'DELETE FROM servicios_activ WHERE dato_extra = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByComentarios($value){
		$sql = 'DELETE FROM servicios_activ WHERE comentarios = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ServiciosActivMySql 
	 */
	protected function readRow($row){
		$serviciosActiv = new ServiciosActiv();
		
		$serviciosActiv->id = $row['id'];
		$serviciosActiv->idActiv = $row['id_activ'];
		$serviciosActiv->descripcion = $row['descripcion'];
		$serviciosActiv->tarifa = $row['tarifa'];
		$serviciosActiv->datoExtra = $row['dato_extra'];
		$serviciosActiv->comentarios = $row['comentarios'];

		return $serviciosActiv;
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
	 * @return ServiciosActivMySql 
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