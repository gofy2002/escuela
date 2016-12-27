<?php
require_once "alumnosdao.php";

class Alumno extends AlumnosDao{
	const DB_TABLA = "alumnos";
	const DB_TABLA_INDICE = "id";


	public $id;
	public $nombre;
	public $apellidos;
	public $email;
	public $domicilio;
	public $domicilio2;
	public $ciudad;
	public $estado;
	public $fecha_nacimiento;
	public $fotografia;
	public $creado_en;	

	public function poblarPropiedades(array $datos){
		$this->id = isset($datos['id']) ? trim($datos['id']) : 0;
		$this->nombre = isset($datos['nombre']) ? trim($datos['nombre']) : null;
		$this->apellidos = isset($datos['apellidos']) ? trim($datos['apellidos']) : null;
		$this->email = isset($datos['email']) ? trim($datos['email']) : null;
		$this->domicilio = isset($datos['domicilio']) ? trim($datos['domicilio']) : null;
		$this->domicilio2 = isset($datos['domicilio2']) ? trim($datos['domicilio2']) : null;
		$this->ciudad = isset($datos['ciudad']) ? trim($datos['ciudad']) : null;
		$this->estado = isset($datos['estado']) ? trim($datos['estado']) : null;
		$this->pais = isset($datos['pais']) ? trim($datos['pais']) : null;
		$this->fecha_nacimiento = isset($datos['fecha_nacimiento']) ? trim($datos['fecha_nacimiento']) : null;
		$this->fotografia = isset($datos['fotografia']) ? trim($datos['fotografia']) : null;
		$this->creado_en = isset($datos['creado_en']) ? trim($datos['creado_en']) : null;
	}
}