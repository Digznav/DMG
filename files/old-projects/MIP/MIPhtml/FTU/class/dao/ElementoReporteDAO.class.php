<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2013-10-14 21:45
 */
interface ElementoReporteDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return ElementoReporte 
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
 	 * @param elementoReporte primary key
 	 */
	public function delete($Id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ElementoReporte elementoReporte
 	 */
	public function insert($elementoReporte);
	
	/**
 	 * Update record in table
 	 *
 	 * @param ElementoReporte elementoReporte
 	 */
	public function update($elementoReporte);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdReporte($value);

	public function queryByDescripcion($value);

	public function queryByTipo($value);

	public function queryByTimestamp($value);


	public function deleteByIdReporte($value);

	public function deleteByDescripcion($value);

	public function deleteByTipo($value);

	public function deleteByTimestamp($value);


}
?>