<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2014-03-25 18:49
 */
interface HotelDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Hotel 
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
 	 * @param hotel primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Hotel hotel
 	 */
	public function insert($hotel);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Hotel hotel
 	 */
	public function update($hotel);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByNombre($value);

	public function queryByDescripcion($value);

	public function queryByCorreoReserv($value);

	public function queryByLogo($value);

	public function queryByFotoHd($value);

	public function queryByNumeroHabitacion($value);


	public function deleteByNombre($value);

	public function deleteByDescripcion($value);

	public function deleteByCorreoReserv($value);

	public function deleteByLogo($value);

	public function deleteByFotoHd($value);

	public function deleteByNumeroHabitacion($value);


}
?>