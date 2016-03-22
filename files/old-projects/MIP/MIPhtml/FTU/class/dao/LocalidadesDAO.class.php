<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2013-10-20 21:45
 */
interface LocalidadesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Localidades 
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
 	 * @param localidade primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Localidades localidade
 	 */
	public function insert($localidade);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Localidades localidade
 	 */
	public function update($localidade);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByMunicipioId($value);

	public function queryByClave($value);

	public function queryByNombre($value);

	public function queryByLatitud($value);

	public function queryByLongitud($value);

	public function queryByAltitud($value);


	public function deleteByMunicipioId($value);

	public function deleteByClave($value);

	public function deleteByNombre($value);

	public function deleteByLatitud($value);

	public function deleteByLongitud($value);

	public function deleteByAltitud($value);


}
?>