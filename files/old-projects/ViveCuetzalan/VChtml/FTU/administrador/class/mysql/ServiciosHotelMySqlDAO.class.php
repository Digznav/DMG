<?php
/**
 * Class that operate on table 'servicios_hotel'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-03-25 18:49
 */
class ServiciosHotelMySqlDAO implements ServiciosHotelDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ServiciosHotelMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM servicios_hotel WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM servicios_hotel';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM servicios_hotel ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param serviciosHotel primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM servicios_hotel WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ServiciosHotelMySql serviciosHotel
 	 */
	public function insert($serviciosHotel){
		$sql = 'INSERT INTO servicios_hotel (id_hotel, descripcion, tarifa, dato_extra, comentarios) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($serviciosHotel->idHotel);
		$sqlQuery->set($serviciosHotel->descripcion);
		$sqlQuery->set($serviciosHotel->tarifa);
		$sqlQuery->setNumber($serviciosHotel->datoExtra);
		$sqlQuery->set($serviciosHotel->comentarios);

		$id = $this->executeInsert($sqlQuery);	
		$serviciosHotel->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ServiciosHotelMySql serviciosHotel
 	 */
	public function update($serviciosHotel){
		$sql = 'UPDATE servicios_hotel SET id_hotel = ?, descripcion = ?, tarifa = ?, dato_extra = ?, comentarios = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($serviciosHotel->idHotel);
		$sqlQuery->set($serviciosHotel->descripcion);
		$sqlQuery->set($serviciosHotel->tarifa);
		$sqlQuery->setNumber($serviciosHotel->datoExtra);
		$sqlQuery->set($serviciosHotel->comentarios);

		$sqlQuery->setNumber($serviciosHotel->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM servicios_hotel';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdHotel($value){
		$sql = 'SELECT * FROM servicios_hotel WHERE id_hotel = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescripcion($value){
		$sql = 'SELECT * FROM servicios_hotel WHERE descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTarifa($value){
		$sql = 'SELECT * FROM servicios_hotel WHERE tarifa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDatoExtra($value){
		$sql = 'SELECT * FROM servicios_hotel WHERE dato_extra = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByComentarios($value){
		$sql = 'SELECT * FROM servicios_hotel WHERE comentarios = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdHotel($value){
		$sql = 'DELETE FROM servicios_hotel WHERE id_hotel = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescripcion($value){
		$sql = 'DELETE FROM servicios_hotel WHERE descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTarifa($value){
		$sql = 'DELETE FROM servicios_hotel WHERE tarifa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDatoExtra($value){
		$sql = 'DELETE FROM servicios_hotel WHERE dato_extra = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByComentarios($value){
		$sql = 'DELETE FROM servicios_hotel WHERE comentarios = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ServiciosHotelMySql 
	 */
	protected function readRow($row){
		$serviciosHotel = new ServiciosHotel();
		
		$serviciosHotel->id = $row['id'];
		$serviciosHotel->idHotel = $row['id_hotel'];
		$serviciosHotel->descripcion = $row['descripcion'];
		$serviciosHotel->tarifa = $row['tarifa'];
		$serviciosHotel->datoExtra = $row['dato_extra'];
		$serviciosHotel->comentarios = $row['comentarios'];

		return $serviciosHotel;
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
	 * @return ServiciosHotelMySql 
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