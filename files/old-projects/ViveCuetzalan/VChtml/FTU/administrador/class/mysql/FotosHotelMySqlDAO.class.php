<?php
/**
 * Class that operate on table 'fotos_hotel'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-03-25 18:49
 */
class FotosHotelMySqlDAO implements FotosHotelDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return FotosHotelMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM fotos_hotel WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM fotos_hotel';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM fotos_hotel ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param fotosHotel primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM fotos_hotel WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param FotosHotelMySql fotosHotel
 	 */
	public function insert($fotosHotel){
		$sql = 'INSERT INTO fotos_hotel (id_hotel, foto) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($fotosHotel->idHotel);
		$sqlQuery->set($fotosHotel->foto);

		$id = $this->executeInsert($sqlQuery);	
		$fotosHotel->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param FotosHotelMySql fotosHotel
 	 */
	public function update($fotosHotel){
		$sql = 'UPDATE fotos_hotel SET id_hotel = ?, foto = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($fotosHotel->idHotel);
		$sqlQuery->set($fotosHotel->foto);

		$sqlQuery->setNumber($fotosHotel->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM fotos_hotel';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdHotel($value){
		$sql = 'SELECT * FROM fotos_hotel WHERE id_hotel = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFoto($value){
		$sql = 'SELECT * FROM fotos_hotel WHERE foto = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdHotel($value){
		$sql = 'DELETE FROM fotos_hotel WHERE id_hotel = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFoto($value){
		$sql = 'DELETE FROM fotos_hotel WHERE foto = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return FotosHotelMySql 
	 */
	protected function readRow($row){
		$fotosHotel = new FotosHotel();
		
		$fotosHotel->id = $row['id'];
		$fotosHotel->idHotel = $row['id_hotel'];
		$fotosHotel->foto = $row['foto'];

		return $fotosHotel;
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
	 * @return FotosHotelMySql 
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