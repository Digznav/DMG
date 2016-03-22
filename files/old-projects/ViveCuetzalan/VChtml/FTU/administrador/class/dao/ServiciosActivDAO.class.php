<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2014-03-25 18:49
 */
interface ServiciosActivDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return ServiciosActiv 
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
 	 * @param serviciosActiv primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ServiciosActiv serviciosActiv
 	 */
	public function insert($serviciosActiv);
	
	/**
 	 * Update record in table
 	 *
 	 * @param ServiciosActiv serviciosActiv
 	 */
	public function update($serviciosActiv);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdActiv($value);

	public function queryByDescripcion($value);

	public function queryByTarifa($value);

	public function queryByDatoExtra($value);

	public function queryByComentarios($value);


	public function deleteByIdActiv($value);

	public function deleteByDescripcion($value);

	public function deleteByTarifa($value);

	public function deleteByDatoExtra($value);

	public function deleteByComentarios($value);


}
?>