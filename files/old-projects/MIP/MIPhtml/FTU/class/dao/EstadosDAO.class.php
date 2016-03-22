<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2013-10-20 21:45
 */
interface EstadosDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Estados 
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
 	 * @param estado primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Estados estado
 	 */
	public function insert($estado);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Estados estado
 	 */
	public function update($estado);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByClave($value);

	public function queryByNombre($value);

	public function queryByAbrev($value);


	public function deleteByClave($value);

	public function deleteByNombre($value);

	public function deleteByAbrev($value);


}
?>