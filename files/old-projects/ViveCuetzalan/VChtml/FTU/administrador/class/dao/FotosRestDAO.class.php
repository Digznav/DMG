<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2014-03-25 18:49
 */
interface FotosRestDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return FotosRest 
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
 	 * @param fotosRest primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param FotosRest fotosRest
 	 */
	public function insert($fotosRest);
	
	/**
 	 * Update record in table
 	 *
 	 * @param FotosRest fotosRest
 	 */
	public function update($fotosRest);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdRest($value);

	public function queryByFoto($value);


	public function deleteByIdRest($value);

	public function deleteByFoto($value);


}
?>