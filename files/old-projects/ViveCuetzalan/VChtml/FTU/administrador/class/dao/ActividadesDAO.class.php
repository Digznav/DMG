<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2014-03-25 18:49
 */
interface ActividadesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Actividades 
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
 	 * @param actividade primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Actividades actividade
 	 */
	public function insert($actividade);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Actividades actividade
 	 */
	public function update($actividade);	

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