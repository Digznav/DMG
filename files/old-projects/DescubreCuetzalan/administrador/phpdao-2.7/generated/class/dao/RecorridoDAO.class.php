<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2014-04-01 22:30
 */
interface RecorridoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Recorrido 
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
 	 * @param recorrido primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Recorrido recorrido
 	 */
	public function insert($recorrido);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Recorrido recorrido
 	 */
	public function update($recorrido);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByNombre($value);

	public function queryByDirigidoa($value);

	public function queryByDuracion($value);

	public function queryByIncluye($value);

	public function queryByRecorrido($value);

	public function queryByCosto($value);

	public function queryByMinimo($value);


	public function deleteByNombre($value);

	public function deleteByDirigidoa($value);

	public function deleteByDuracion($value);

	public function deleteByIncluye($value);

	public function deleteByRecorrido($value);

	public function deleteByCosto($value);

	public function deleteByMinimo($value);


}
?>