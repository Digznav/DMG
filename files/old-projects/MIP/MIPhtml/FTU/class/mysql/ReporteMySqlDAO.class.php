<?php
/**
 * Class that operate on table 'Reporte'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2013-10-14 21:45
 */
class ReporteMySqlDAO implements ReporteDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ReporteMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM Reporte WHERE Id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($id);
		return $this->getRow($sqlQuery);
	}

	public function queryMaxId()
	{

		$sql = 'SELECT * FROM Reporte WHERE Id in (SELECT MAX(Id) as id FROM Reporte)';
		$sqlQuery = new SqlQuery($sql);
		return $this->getRow($sqlQuery);	
	}
	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM Reporte';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM Reporte ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param reporte primary key
 	 */
	public function delete($Id){
		$sql = 'DELETE FROM Reporte WHERE Id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($Id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ReporteMySql reporte
 	 */
	public function insert($reporte){
		$sql = 'INSERT INTO Reporte (idCliente, idTecnico, Folio, Propuesta, Responsable, FechaCompromiso, Accion, Foto_Inicial, Foto_Final, CodigoGoogle, Comentarios, Fecha, Hora, Status, Timestamp) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, CURDATE(), NOW(), ?, NOW())';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($reporte->idCliente);
		$sqlQuery->set($reporte->idTecnico);
		$sqlQuery->set($reporte->folio);
		$sqlQuery->set($reporte->propuesta);
		$sqlQuery->set($reporte->responsable);
		$sqlQuery->set($reporte->fechaCompromiso);
		$sqlQuery->set($reporte->accion);
		$sqlQuery->set($reporte->fotoInicial);
		$sqlQuery->set($reporte->fotoFinal);
		$sqlQuery->set($reporte->codigoGoogle);
		$sqlQuery->set($reporte->comentarios);
		/*$sqlQuery->set($reporte->fecha);
		$sqlQuery->set($reporte->hora);
		*/$sqlQuery->set($reporte->status);
		// $sqlQuery->set($reporte->timestamp);

		$id = $this->executeInsert($sqlQuery);	
		$reporte->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ReporteMySql reporte
 	 */
	public function update($reporte){
		$sql = 'UPDATE Reporte SET idCliente = ?, idTecnico = ?, Folio = ?, Propuesta = ?, Responsable = ?, FechaCompromiso = ?, Accion = ?, Foto_Inicial = ?, Foto_Final = ?, CodigoGoogle = ?, Comentarios = ?, Fecha = ?, Hora = ?, Status = ?, Timestamp = ? WHERE Id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($reporte->idCliente);
		$sqlQuery->set($reporte->idTecnico);
		$sqlQuery->set($reporte->folio);
		$sqlQuery->set($reporte->propuesta);
		$sqlQuery->set($reporte->responsable);
		$sqlQuery->set($reporte->fechaCompromiso);
		$sqlQuery->set($reporte->accion);
		$sqlQuery->set($reporte->fotoInicial);
		$sqlQuery->set($reporte->fotoFinal);
		$sqlQuery->set($reporte->codigoGoogle);
		$sqlQuery->set($reporte->comentarios);
		$sqlQuery->set($reporte->fecha);
		$sqlQuery->set($reporte->hora);
		$sqlQuery->set($reporte->status);
		$sqlQuery->set($reporte->timestamp);

		$sqlQuery->set($reporte->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM Reporte';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByIdCliente($value){
		$sql = 'SELECT * FROM Reporte WHERE idCliente = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdTecnico($value){
		$sql = 'SELECT * FROM Reporte WHERE idTecnico = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFolio($value){
		$sql = 'SELECT * FROM Reporte WHERE Folio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPropuesta($value){
		$sql = 'SELECT * FROM Reporte WHERE Propuesta = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByResponsable($value){
		$sql = 'SELECT * FROM Reporte WHERE Responsable = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFechaCompromiso($value){
		$sql = 'SELECT * FROM Reporte WHERE FechaCompromiso = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAccion($value){
		$sql = 'SELECT * FROM Reporte WHERE Accion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFotoInicial($value){
		$sql = 'SELECT * FROM Reporte WHERE Foto_Inicial = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFotoFinal($value){
		$sql = 'SELECT * FROM Reporte WHERE Foto_Final = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCodigoGoogle($value){
		$sql = 'SELECT * FROM Reporte WHERE CodigoGoogle = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByComentarios($value){
		$sql = 'SELECT * FROM Reporte WHERE Comentarios = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFecha($value){
		$sql = 'SELECT * FROM Reporte WHERE Fecha = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByHora($value){
		$sql = 'SELECT * FROM Reporte WHERE Hora = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStatus($value){
		$sql = 'SELECT * FROM Reporte WHERE Status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTimestamp($value){
		$sql = 'SELECT * FROM Reporte WHERE Timestamp = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByIdCliente($value){
		$sql = 'DELETE FROM Reporte WHERE idCliente = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdTecnico($value){
		$sql = 'DELETE FROM Reporte WHERE idTecnico = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFolio($value){
		$sql = 'DELETE FROM Reporte WHERE Folio = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPropuesta($value){
		$sql = 'DELETE FROM Reporte WHERE Propuesta = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByResponsable($value){
		$sql = 'DELETE FROM Reporte WHERE Responsable = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFechaCompromiso($value){
		$sql = 'DELETE FROM Reporte WHERE FechaCompromiso = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAccion($value){
		$sql = 'DELETE FROM Reporte WHERE Accion = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFotoInicial($value){
		$sql = 'DELETE FROM Reporte WHERE Foto_Inicial = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFotoFinal($value){
		$sql = 'DELETE FROM Reporte WHERE Foto_Final = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCodigoGoogle($value){
		$sql = 'DELETE FROM Reporte WHERE CodigoGoogle = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByComentarios($value){
		$sql = 'DELETE FROM Reporte WHERE Comentarios = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFecha($value){
		$sql = 'DELETE FROM Reporte WHERE Fecha = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByHora($value){
		$sql = 'DELETE FROM Reporte WHERE Hora = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStatus($value){
		$sql = 'DELETE FROM Reporte WHERE Status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTimestamp($value){
		$sql = 'DELETE FROM Reporte WHERE Timestamp = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ReporteMySql 
	 */
	protected function readRow($row){
		$reporte = new Reporte();
		
		$reporte->id = $row['Id'];
		$reporte->idCliente = $row['idCliente'];
		$reporte->idTecnico = $row['idTecnico'];
		$reporte->folio = $row['Folio'];
		$reporte->propuesta = $row['Propuesta'];
		$reporte->responsable = $row['Responsable'];
		$reporte->fechaCompromiso = $row['FechaCompromiso'];
		$reporte->accion = $row['Accion'];
		$reporte->fotoInicial = $row['Foto_Inicial'];
		$reporte->fotoFinal = $row['Foto_Final'];
		$reporte->codigoGoogle = $row['CodigoGoogle'];
		$reporte->comentarios = $row['Comentarios'];
		$reporte->fecha = $row['Fecha'];
		$reporte->hora = $row['Hora'];
		$reporte->status = $row['Status'];
		$reporte->timestamp = $row['Timestamp'];

		return $reporte;
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
	 * @return ReporteMySql 
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