<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once "AbstractController.php";

class alumnoscontroller extends  AbstractController{

	public function __construct(){
		parent::__construct();
	}


	/**
	*Lista de alumnos
	*/
	public function index(){
		$this->load->model('alumno');
		$busqueda = $this->alumno->obtenerTodosRegistros();
		$datos = array('titulo' => 'Listado de Usuario',
						'busquedaAlumno' => $busqueda,);
		$this->load->view('alumnos/index.php',$datos);
	}

	public function crear(){
		$this->load->view('alumnos/crear.php');
	}

}