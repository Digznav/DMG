<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2014-03-25 18:49
 */
interface HabitacionesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Habitaciones 
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
 	 * @param habitacione primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Habitaciones habitacione
 	 */
	public function insert($habitacione);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Habitaciones habitacione
 	 */
	public function update($habitacione);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdHotel($value);

	public function queryByTipoHabitacion($value);

	public function queryByTarifa($value);


	public function deleteByIdHotel($value);

	public function deleteByTipoHabitacion($value);

	public function deleteByTarifa($value);


}
?>