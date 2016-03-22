<?php
/**
 * Class that operate on table 'hotel'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-03-25 18:49
 */
class HotelMySqlDAO implements HotelDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return HotelMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM hotel WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM hotel';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM hotel ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param hotel primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM hotel WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param HotelMySql hotel
 	 */
	public function insert($hotel){
		$sql = 'INSERT INTO hotel (nombre, descripcion, correo_reserv, logo, foto_hd, numero_habitacion) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($hotel->nombre);
		$sqlQuery->set($hotel->descripcion);
		$sqlQuery->set($hotel->correoReserv);
		$sqlQuery->set($hotel->logo);
		$sqlQuery->set($hotel->fotoHd);
		$sqlQuery->setNumber($hotel->numeroHabitacion);

		$id = $this->executeInsert($sqlQuery);	
		$hotel->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param HotelMySql hotel
 	 */
	public function update($hotel){
		$sql = 'UPDATE hotel SET nombre = ?, descripcion = ?, correo_reserv = ?, logo = ?, foto_hd = ?, numero_habitacion = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($hotel->nombre);
		$sqlQuery->set($hotel->descripcion);
		$sqlQuery->set($hotel->correoReserv);
		$sqlQuery->set($hotel->logo);
		$sqlQuery->set($hotel->fotoHd);
		$sqlQuery->setNumber($hotel->numeroHabitacion);

		$sqlQuery->setNumber($hotel->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM hotel';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByNombre($value){
		$sql = 'SELECT * FROM hotel WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescripcion($value){
		$sql = 'SELECT * FROM hotel WHERE descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCorreoReserv($value){
		$sql = 'SELECT * FROM hotel WHERE correo_reserv = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLogo($value){
		$sql = 'SELECT * FROM hotel WHERE logo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFotoHd($value){
		$sql = 'SELECT * FROM hotel WHERE foto_hd = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNumeroHabitacion($value){
		$sql = 'SELECT * FROM hotel WHERE numero_habitacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByNombre($value){
		$sql = 'DELETE FROM hotel WHERE nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescripcion($value){
		$sql = 'DELETE FROM hotel WHERE descripcion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCorreoReserv($value){
		$sql = 'DELETE FROM hotel WHERE correo_reserv = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLogo($value){
		$sql = 'DELETE FROM hotel WHERE logo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFotoHd($value){
		$sql = 'DELETE FROM hotel WHERE foto_hd = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNumeroHabitacion($value){
		$sql = 'DELETE FROM hotel WHERE numero_habitacion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return HotelMySql 
	 */
	protected function readRow($row){
		$hotel = new Hotel();
		
		$hotel->id = $row['id'];
		$hotel->nombre = $row['nombre'];
		$hotel->descripcion = $row['descripcion'];
		$hotel->correoReserv = $row['correo_reserv'];
		$hotel->logo = $row['logo'];
		$hotel->fotoHd = $row['foto_hd'];
		$hotel->numeroHabitacion = $row['numero_habitacion'];

		return $hotel;
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
	 * @return HotelMySql 
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