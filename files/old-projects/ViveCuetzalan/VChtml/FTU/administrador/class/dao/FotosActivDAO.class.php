<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2014-03-25 18:49
 */
interface FotosActivDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return FotosActiv 
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
 	 * @param fotosActiv primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param FotosActiv fotosActiv
 	 */
	public function insert($fotosActiv);
	
	/**
 	 * Update record in table
 	 *
 	 * @param FotosActiv fotosActiv
 	 */
	public function update($fotosActiv);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdActiv($value);

	public function queryByFoto($value);


	public function deleteByIdActiv($value);

	public function deleteByFoto($value);


}
?>