<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2013-10-14 21:45
 */
interface ContactoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Contacto 
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
 	 * @param contacto primary key
 	 */
	public function delete($Id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Contacto contacto
 	 */
	public function insert($contacto);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Contacto contacto
 	 */
	public function update($contacto);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdCliente($value);

	public function queryByNombre($value);

	public function queryByCargo($value);

	public function queryByEmail($value);

	public function queryByTelefono($value);

	public function queryByExt($value);

	public function queryByAcceso($value);


	public function deleteByIdCliente($value);

	public function deleteByNombre($value);

	public function deleteByCargo($value);

	public function deleteByEmail($value);

	public function deleteByTelefono($value);

	public function deleteByExt($value);

	public function deleteByAcceso($value);


}
?>