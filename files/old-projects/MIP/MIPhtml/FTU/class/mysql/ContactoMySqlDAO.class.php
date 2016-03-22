<?php
/**
 * Class that operate on table 'Contacto'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2013-10-14 21:45
 */
class ContactoMySqlDAO implements ContactoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ContactoMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM Contacto WHERE Id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM Contacto';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM Contacto ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param contacto primary key
 	 */
	public function delete($Id){
		$sql = 'DELETE FROM Contacto WHERE Id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($Id);

//		echo "SQL=[".$sqlQuery->getQuery()."]";
		
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ContactoMySql contacto
 	 */
	public function insert($contacto){
		$sql = 'INSERT INTO Contacto (idCliente, Nombre, Cargo, Email, Telefono, Ext, Acceso) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($contacto->idCliente);
		$sqlQuery->set($contacto->nombre);
		$sqlQuery->set($contacto->cargo);
		$sqlQuery->set($contacto->email);
		$sqlQuery->set($contacto->telefono);
		$sqlQuery->set($contacto->ext);
		$sqlQuery->set($contacto->acceso);

		$id = $this->executeInsert($sqlQuery);	
		$contacto->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ContactoMySql contacto
 	 */
	public function update($contacto){
		$sql = 'UPDATE Contacto SET idCliente = ?, Nombre = ?, Cargo = ?, Email = ?, Telefono = ?, Ext = ?, Acceso = ? WHERE Id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($contacto->idCliente);
		$sqlQuery->set($contacto->nombre);
		$sqlQuery->set($contacto->cargo);
		$sqlQuery->set($contacto->email);
		$sqlQuery->set($contacto->telefono);
		$sqlQuery->set($contacto->ext);
		$sqlQuery->set($contacto->acceso);

		$sqlQuery->set($contacto->id);

//		echo "SQL=[".$sqlQuery->getQuery()."]";
		
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM Contacto';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdCliente($value){
		$sql = 'SELECT * FROM Contacto WHERE idCliente = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNombre($value){
		$sql = 'SELECT * FROM Contacto WHERE Nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCargo($value){
		$sql = 'SELECT * FROM Contacto WHERE Cargo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEmail($value){
		$sql = 'SELECT * FROM Contacto WHERE Email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTelefono($value){
		$sql = 'SELECT * FROM Contacto WHERE Telefono = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByExt($value){
		$sql = 'SELECT * FROM Contacto WHERE Ext = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAcceso($value){
		$sql = 'SELECT * FROM Contacto WHERE Acceso = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdCliente($value){
		$sql = 'DELETE FROM Contacto WHERE idCliente = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNombre($value){
		$sql = 'DELETE FROM Contacto WHERE Nombre = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCargo($value){
		$sql = 'DELETE FROM Contacto WHERE Cargo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEmail($value){
		$sql = 'DELETE FROM Contacto WHERE Email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTelefono($value){
		$sql = 'DELETE FROM Contacto WHERE Telefono = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByExt($value){
		$sql = 'DELETE FROM Contacto WHERE Ext = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAcceso($value){
		$sql = 'DELETE FROM Contacto WHERE Acceso = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ContactoMySql 
	 */
	protected function readRow($row){
		$contacto = new Contacto();
		
		$contacto->id = $row['Id'];
		$contacto->idCliente = $row['idCliente'];
		$contacto->nombre = $row['Nombre'];
		$contacto->cargo = $row['Cargo'];
		$contacto->email = $row['Email'];
		$contacto->telefono = $row['Telefono'];
		$contacto->ext = $row['Ext'];
		$contacto->acceso = $row['Acceso'];

		return $contacto;
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
	 * @return ContactoMySql 
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