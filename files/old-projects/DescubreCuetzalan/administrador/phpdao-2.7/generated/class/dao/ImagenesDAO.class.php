<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2014-04-01 22:30
 */
interface ImagenesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Imagenes 
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
 	 * @param imagene primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Imagenes imagene
 	 */
	public function insert($imagene);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Imagenes imagene
 	 */
	public function update($imagene);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdRecorrido($value);

	public function queryByUrlImagen($value);


	public function deleteByIdRecorrido($value);

	public function deleteByUrlImagen($value);


}
?>