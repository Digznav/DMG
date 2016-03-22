<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */
class DAOFactory{
	
	/**
	 * @return AccesoDAO
	 */
	public static function getAccesoDAO(){
		return new AccesoMySqlExtDAO();
	}

	/**
	 * @return ClienteDAO
	 */
	public static function getClienteDAO(){
		return new ClienteMySqlExtDAO();
	}

	/**
	 * @return ContactoDAO
	 */
	public static function getContactoDAO(){
		return new ContactoMySqlExtDAO();
	}

	/**
	 * @return DatosEmpresaDAO
	 */
	public static function getDatosEmpresaDAO(){
		return new DatosEmpresaMySqlExtDAO();
	}

	/**
	 * @return ElementoReporteDAO
	 */
	public static function getElementoReporteDAO(){
		return new ElementoReporteMySqlExtDAO();
	}

	/**
	 * @return ReporteDAO
	 */
	public static function getReporteDAO(){
		return new ReporteMySqlExtDAO();
	}

	/**
	 * @return TecnicoDAO
	 */
	public static function getTecnicoDAO(){
		return new TecnicoMySqlExtDAO();
	}

	/**
	 * @return EstadosDAO
	 */
	public static function getEstadosDAO(){
		return new EstadosMySqlExtDAO();
	}

	/**
	 * @return LocalidadesDAO
	 */
	public static function getLocalidadesDAO(){
		return new LocalidadesMySqlExtDAO();
	}

	/**
	 * @return MunicipiosDAO
	 */
	public static function getMunicipiosDAO(){
		return new MunicipiosMySqlExtDAO();
	}


}
?>