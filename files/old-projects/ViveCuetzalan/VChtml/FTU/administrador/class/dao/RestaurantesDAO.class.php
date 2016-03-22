<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2014-03-25 18:49
 */
interface RestaurantesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Restaurantes 
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
 	 * @param restaurante primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Restaurantes restaurante
 	 */
	public function insert($restaurante);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Restaurantes restaurante
 	 */
	public function update($restaurante);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByNombre($value);

	public function queryByDescripcion($value);

	public function queryByCorreo($value);

	public function queryByLogo($value);

	public function queryByFotoHd($value);


	public function deleteByNombre($value);

	public function deleteByDescripcion($value);

	public function deleteByCorreo($value);

	public function deleteByLogo($value);

	public function deleteByFotoHd($value);


}
?>