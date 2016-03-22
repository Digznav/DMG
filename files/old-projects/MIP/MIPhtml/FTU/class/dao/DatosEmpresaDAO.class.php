<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2013-10-14 21:45
 */
interface DatosEmpresaDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return DatosEmpresa 
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
 	 * @param datosEmpresa primary key
 	 */
	public function delete($Id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param DatosEmpresa datosEmpresa
 	 */
	public function insert($datosEmpresa);
	
	/**
 	 * Update record in table
 	 *
 	 * @param DatosEmpresa datosEmpresa
 	 */
	public function update($datosEmpresa);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdCliente($value);

	public function queryByNombre($value);

	public function queryByDireccion($value);

	public function queryByIdCiudad($value);

	public function queryByIdMpio($value);

	public function queryByIdEstado($value);

	public function queryByCP($value);


	public function deleteByIdCliente($value);

	public function deleteByNombre($value);

	public function deleteByDireccion($value);

	public function deleteByIdCiudad($value);

	public function deleteByIdMpio($value);

	public function deleteByIdEstado($value);

	public function deleteByCP($value);


}
?>