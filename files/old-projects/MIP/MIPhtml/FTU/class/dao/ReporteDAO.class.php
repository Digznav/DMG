<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2013-10-14 21:45
 */
interface ReporteDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Reporte 
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
 	 * @param reporte primary key
 	 */
	public function delete($Id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Reporte reporte
 	 */
	public function insert($reporte);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Reporte reporte
 	 */
	public function update($reporte);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdCliente($value);

	public function queryByIdTecnico($value);

	public function queryByFolio($value);

	public function queryByPropuesta($value);

	public function queryByResponsable($value);

	public function queryByFechaCompromiso($value);

	public function queryByAccion($value);

	public function queryByFotoInicial($value);

	public function queryByFotoFinal($value);

	public function queryByCodigoGoogle($value);

	public function queryByComentarios($value);

	public function queryByFecha($value);

	public function queryByHora($value);

	public function queryByStatus($value);

	public function queryByTimestamp($value);


	public function deleteByIdCliente($value);

	public function deleteByIdTecnico($value);

	public function deleteByFolio($value);

	public function deleteByPropuesta($value);

	public function deleteByResponsable($value);

	public function deleteByFechaCompromiso($value);

	public function deleteByAccion($value);

	public function deleteByFotoInicial($value);

	public function deleteByFotoFinal($value);

	public function deleteByCodigoGoogle($value);

	public function deleteByComentarios($value);

	public function deleteByFecha($value);

	public function deleteByHora($value);

	public function deleteByStatus($value);

	public function deleteByTimestamp($value);


}
?>