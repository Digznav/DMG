<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2014-03-25 18:49
 */
interface ServiciosRestDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return ServiciosRest 
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
 	 * @param serviciosRest primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ServiciosRest serviciosRest
 	 */
	public function insert($serviciosRest);
	
	/**
 	 * Update record in table
 	 *
 	 * @param ServiciosRest serviciosRest
 	 */
	public function update($serviciosRest);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdRest($value);

	public function queryByDescripcion($value);

	public function queryByTarifa($value);

	public function queryByDatoExtra($value);

	public function queryByComentarios($value);


	public function deleteByIdRest($value);

	public function deleteByDescripcion($value);

	public function deleteByTarifa($value);

	public function deleteByDatoExtra($value);

	public function deleteByComentarios($value);


}
?>