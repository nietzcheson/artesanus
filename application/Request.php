<?php


class Request{

	private $_controlador;
	private $_metodo;
	private $_argumentos;
	private $_modulo;
	private $_modules;

	public function __construct(){
		if(isset($_GET["url"])){
			$url = filter_input(INPUT_GET, "url",FILTER_SANITIZE_URL);
			// $url = explode("/", $url); //Divide la url cada vez que encuentra un slash
			// $url = array_filter($url);

			$this->_modules = array(
				"usuarios",
				"admin"
			);

			$parametosModulos = array();

			$configRutas = APP_PATH ."config/rutas.php";
			if(is_readable($configRutas)){
					include $configRutas;
					foreach($this->_modules as $modulo){
						if($rutas[$modulo]["rutas_modulo"]){

							$ruta_modulo = $rutas[$modulo]["rutas_modulo"];

							$modulos = dirname(APP_PATH). DS ."modules". DS .$ruta_modulo;

							if(is_readable($modulos)){
								include_once $modulos;

								$parametosModulos [] = $ruta;

							}else{
								throw new Exception("Enrutamiento de módulo errónea");
								exit;
							}

						}else{
							throw new Exception("Enrutamiento de módulo errónea");
							exit;
						}
					}
				}

				$parametrosModulo = "";

				foreach($parametosModulos as $params){
						$parametrosModulo = $params["parametros"];
						$uriModulo = $params["uri"];
				}

				$url = explode("/", $url);
				$uriModulo = explode("/",$uriModulo);

				if(count($url) == count($uriModulo)){
					if($parametrosModulo){
						$parametrosModulo;

						$parametrosModulo = explode(":", $parametrosModulo);
						$parametrosModulo = array_filter($parametrosModulo);

						$this->_modulo = $parametrosModulo[0];
						$this->_controlador = $parametrosModulo[1];
						$this->_metodo = $parametrosModulo[2];
						echo $this->_modulo."<br>";
						echo $this->_controlador."<br>";
						echo $this->_metodo."<br>";
					}else{
						throw new Exception("Error 404");
						exit;
					}
				}else{
					print_r($url);
				}




			exit;


			$this->_modulo = strtolower(array_shift($url));

			if(!$this->_modulo){
				$this->_modulo = false;
			}else{
				if(count($this->_modules)){
					if(!in_array($this->_modulo, $this->_modules)){
						$this->_controlador = $this->_modulo;
						$this->_modulo = false;
					}else{
						$this->_controlador = strtolower(array_shift($url));
						if(!$this->_controlador){
							$this->_controlador = "index";
						}
					}
				}else{
					$this->_controlador = $this->_modulo;
					$this->_modulo = false;
				}
			}

			$this->_metodo = strtolower( array_shift($url) );
			$this->_argmumentos = $url;

		}



		if(!$this->_controlador){
			$this->_controlador = DEFAULT_CONTROLLER;
		}

		if(!$this->_metodo){
			$this->_metodo = "index";
		}

		if(!isset($this->_argmumentos)){
			$this->_argmumentos = array();
		}

	}

	public function getModulo(){
		return $this->_modulo;
	}

	public function getControlador(){
		return $this->_controlador;
	}

	public function getMetodo(){
		return $this->_metodo;
	}

	public function getArgs(){
		return $this->_argmumentos;
	}


}



?>
