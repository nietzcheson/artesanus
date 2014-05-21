<?php

class ajaxController extends Controller{

	private $_ajax;
	public function __construct(){
		parent::__construct();
		$this->_ajax = $this->loadModel("ajax");
	}

	public function index(){
		$this->_view->assign("titulo","Ejemplo de ajax");
		$this->_view->setJs(array("ajax"));
		$this->_view->assign("paises",$this->_ajax->getPaises());

		$this->_view->renderizar("index");
	}

	public function getCiudades(){

		if($this->getInt("pais")){
			echo json_encode($this->_ajax->getCiudades($this->getInt("pais")));
		}

	}

	public function insertarCiudad(){

		if($this->getInt("pais") && $this->getSql("ciudad")){
			$this->_ajax->insertarCiudad(
				$this->getSql("ciudad"),
				$this->getInt("pais")
			);
		}
	}

	public function post(){
		$this->_view->assign("titulo","AJAX Post");
		$this->_view->setJs(array("post"));
		//$this->_view->assign("paises",$this->_ajax->getPaises());
		$this->_view->renderizar("post");
	}

	public function enviar(){

		echo json_encode($this->getSql("id"));

		return "Listo";

	}
}


?>
