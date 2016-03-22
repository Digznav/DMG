<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2013-10-20 21:45
 */
interface MunicipiosDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Municipios 
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
 	 * @param municipio primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Municipios municipio
 	 */
	public function insert($municipio);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Municipios municipio
 	 */
	public function update($municipio);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByEstadoId($value);

	public function queryByClave($value);

	public function queryByNombre($value);

	public function queryBySigla($value);


	public function deleteByEstadoId($value);

	public function deleteByClave($value);

	public function deleteByNombre($value);

	public function deleteBySigla($value);


}
?>