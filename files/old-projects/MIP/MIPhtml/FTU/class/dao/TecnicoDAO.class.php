<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2013-11-07 12:31
 */
interface TecnicoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Tecnico 
	 */
	public function load($id);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param tecnico primary key
 	 */
	public function delete($Id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Tecnico tecnico
 	 */
	public function insert($tecnico);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Tecnico tecnico
 	 */
	public function update($tecnico);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByNombre($value);

	public function queryByTel($value);

	public function queryByAcceso($value);

	public function queryByEmail($value);


	public function deleteByNombre($value);

	public function deleteByTel($value);

	public function deleteByAcceso($value);

	public function deleteByEmail($value);


}
?>