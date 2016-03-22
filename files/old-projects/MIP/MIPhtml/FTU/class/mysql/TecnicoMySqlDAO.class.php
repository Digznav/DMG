<?php

/**

 * Class that operate on table 'Tecnico'. Database Mysql.

 *

 * @author: http://phpdao.com

 * @date: 2013-11-07 12:31

 */

class TecnicoMySqlDAO implements TecnicoDAO{



	/**

	 * Get Domain object by primry key

	 *

	 * @param String $id primary key

	 * @return TecnicoMySql 

	 */

	public function load($id){

		$sql = 'SELECT * FROM Tecnico WHERE Id = ?';		

		$sqlQuery = new SqlQuery($sql);

		$sqlQuery->setNumber($id);

		return $this->getRow($sqlQuery);

	}



	/**

	 * Get all records from table

	 */

	public function queryAll(){

		$sql = 'SELECT * FROM Tecnico';

		$sqlQuery = new SqlQuery($sql);

		return $this->getList($sqlQuery);

	}

	

	/**

	 * Get all records from table ordered by field

	 *

	 * @param $orderColumn column name

	 */

	public function queryAllOrderBy($orderColumn){

		$sql = 'SELECT * FROM Tecnico ORDER BY '.$orderColumn;

		$sqlQuery = new SqlQuery($sql);

		return $this->getList($sqlQuery);

	}

	

	/**

 	 * Delete record from table

 	 * @param Tecnico primary key

 	 */

	public function delete($Id){

		$sql = 'DELETE FROM Tecnico WHERE Id = ?';

		$sqlQuery = new SqlQuery($sql);

		$sqlQuery->set($Id);

		return $this->executeUpdate($sqlQuery);

	}

	

	/**

 	 * Insert record to table

 	 *

 	 * @param TecnicoMySql tecnico

 	 */

	public function insert($tecnico){

		$sql = 'INSERT INTO Tecnico (Nombre, Tel, Acceso, Email) VALUES (?, ?, ?, ?)';

		$sqlQuery = new SqlQuery($sql);

		
		$sqlQuery->set($tecnico->nombre);
		$sqlQuery->set($tecnico->tel);
		$sqlQuery->set($tecnico->acceso);
		$sqlQuery->set($tecnico->email);


		$id = $this->executeInsert($sqlQuery);	

		$tecnico->id = $id;

		return $id;

	}

	

	/**

 	 * Update record in table

 	 *

 	 * @param TecnicoMySql tecnico

 	 */

	public function update($tecnico){

		$sql = 'UPDATE Tecnico SET Nombre = ?, Tel = ?, Acceso = ?, Email = ? WHERE Id = ?';

		$sqlQuery = new SqlQuery($sql);

		
		$sqlQuery->set($tecnico->nombre);
		$sqlQuery->set($tecnico->tel);
		$sqlQuery->set($tecnico->acceso);
		$sqlQuery->set($tecnico->email);


		$sqlQuery->set($tecnico->id);

		return $this->executeUpdate($sqlQuery);

	}



	/**

 	 * Delete all rows

 	 */

	public function clean(){

		$sql = 'DELETE FROM Tecnico';

		$sqlQuery = new SqlQuery($sql);

		return $this->executeUpdate($sqlQuery);

	}



	public function queryByNombre($value){

		$sql = 'SELECT * FROM Tecnico WHERE Nombre = ?';

		$sqlQuery = new SqlQuery($sql);

		$sqlQuery->set($value);

		return $this->getList($sqlQuery);

	}

	public function queryByTel($value){

		$sql = 'SELECT * FROM Tecnico WHERE Tel = ?';

		$sqlQuery = new SqlQuery($sql);

		$sqlQuery->set($value);

		return $this->getList($sqlQuery);

	}

	public function queryByAcceso($value){

		$sql = 'SELECT * FROM Tecnico WHERE Acceso = ?';

		$sqlQuery = new SqlQuery($sql);

		$sqlQuery->set($value);

		return $this->getList($sqlQuery);

	}

	public function queryByEmail($value){

		$sql = 'SELECT * FROM Tecnico WHERE Email = ?';

		$sqlQuery = new SqlQuery($sql);

		$sqlQuery->setString($value);

		// return $this->getList($sqlQuery);
		return $this->getRow($sqlQuery);

	}



	public function deleteByNombre($value){

		$sql = 'DELETE FROM Tecnico WHERE Nombre = ?';

		$sqlQuery = new SqlQuery($sql);

		$sqlQuery->set($value);

		return $this->executeUpdate($sqlQuery);

	}

	public function deleteByTel($value){

		$sql = 'DELETE FROM Tecnico WHERE Tel = ?';

		$sqlQuery = new SqlQuery($sql);

		$sqlQuery->set($value);

		return $this->executeUpdate($sqlQuery);

	}

	public function deleteByAcceso($value){

		$sql = 'DELETE FROM Tecnico WHERE Acceso = ?';

		$sqlQuery = new SqlQuery($sql);

		$sqlQuery->set($value);

		return $this->executeUpdate($sqlQuery);

	}

	public function deleteByEmail($value){

		$sql = 'DELETE FROM Tecnico WHERE Email = ?';

		$sqlQuery = new SqlQuery($sql);

		$sqlQuery->set($value);

		return $this->executeUpdate($sqlQuery);

	}



	

	/**

	 * Read row

	 *

	 * @return TecnicoMySql 

	 */

	protected function readRow($row){

		$tecnico = new Tecnico();

		
		$tecnico->id = $row['Id'];
		$tecnico->nombre = $row['Nombre'];
		$tecnico->tel = $row['Tel'];
		$tecnico->acceso = $row['Acceso'];
		$tecnico->email = $row['Email'];


		return $tecnico;

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

	 * @return TecnicoMySql 

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