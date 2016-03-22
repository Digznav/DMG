<?php
/**
 * Class that operate on table 'fotos_activ'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-03-25 18:49
 */
class FotosActivMySqlDAO implements FotosActivDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return FotosActivMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM fotos_activ WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM fotos_activ';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM fotos_activ ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param fotosActiv primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM fotos_activ WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param FotosActivMySql fotosActiv
 	 */
	public function insert($fotosActiv){
		$sql = 'INSERT INTO fotos_activ (id_activ, foto) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($fotosActiv->idActiv);
		$sqlQuery->set($fotosActiv->foto);

		$id = $this->executeInsert($sqlQuery);	
		$fotosActiv->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param FotosActivMySql fotosActiv
 	 */
	public function update($fotosActiv){
		$sql = 'UPDATE fotos_activ SET id_activ = ?, foto = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($fotosActiv->idActiv);
		$sqlQuery->set($fotosActiv->foto);

		$sqlQuery->setNumber($fotosActiv->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM fotos_activ';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdActiv($value){
		$sql = 'SELECT * FROM fotos_activ WHERE id_activ = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFoto($value){
		$sql = 'SELECT * FROM fotos_activ WHERE foto = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdActiv($value){
		$sql = 'DELETE FROM fotos_activ WHERE id_activ = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFoto($value){
		$sql = 'DELETE FROM fotos_activ WHERE foto = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return FotosActivMySql 
	 */
	protected function readRow($row){
		$fotosActiv = new FotosActiv();
		
		$fotosActiv->id = $row['id'];
		$fotosActiv->idActiv = $row['id_activ'];
		$fotosActiv->foto = $row['foto'];

		return $fotosActiv;
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
	 * @return FotosActivMySql 
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