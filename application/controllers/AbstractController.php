<?php
defined('BASEPATH') OR exit('No direct script access allowed');

abstract class AbstractController extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('html');


	}

}