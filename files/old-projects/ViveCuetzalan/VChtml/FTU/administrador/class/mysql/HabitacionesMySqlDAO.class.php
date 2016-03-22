<?php
/**
 * Class that operate on table 'habitaciones'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-03-25 18:49
 */
class HabitacionesMySqlDAO implements HabitacionesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return HabitacionesMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM habitaciones WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM habitaciones';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM habitaciones ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param habitacione primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM habitaciones WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param HabitacionesMySql habitacione
 	 */
	public function insert($habitacione){
		$sql = 'INSERT INTO habitaciones (id_hotel, tipo_habitacion, tarifa) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($habitacione->idHotel);
		$sqlQuery->set($habitacione->tipoHabitacion);
		$sqlQuery->set($habitacione->tarifa);

		$id = $this->executeInsert($sqlQuery);	
		$habitacione->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param HabitacionesMySql habitacione
 	 */
	public function update($habitacione){
		$sql = 'UPDATE habitaciones SET id_hotel = ?, tipo_habitacion = ?, tarifa = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($habitacione->idHotel);
		$sqlQuery->set($habitacione->tipoHabitacion);
		$sqlQuery->set($habitacione->tarifa);

		$sqlQuery->setNumber($habitacione->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM habitaciones';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdHotel($value){
		$sql = 'SELECT * FROM habitaciones WHERE id_hotel = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTipoHabitacion($value){
		$sql = 'SELECT * FROM habitaciones WHERE tipo_habitacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTarifa($value){
		$sql = 'SELECT * FROM habitaciones WHERE tarifa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdHotel($value){
		$sql = 'DELETE FROM habitaciones WHERE id_hotel = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTipoHabitacion($value){
		$sql = 'DELETE FROM habitaciones WHERE tipo_habitacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTarifa($value){
		$sql = 'DELETE FROM habitaciones WHERE tarifa = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return HabitacionesMySql 
	 */
	protected function readRow($row){
		$habitacione = new Habitacione();
		
		$habitacione->id = $row['id'];
		$habitacione->idHotel = $row['id_hotel'];
		$habitacione->tipoHabitacion = $row['tipo_habitacion'];
		$habitacione->tarifa = $row['tarifa'];

		return $habitacione;
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
	 * @return HabitacionesMySql 
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