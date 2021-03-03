<?php 
	class vistasmodelo{
	/*----- MODELO PARA OBTENER VISTAS -----*/
		protected static function obtener_vistas_modelo($vistas){
			$listaBlanca=["home","list-estudiante"];
			if(in_array($vistas, $listaBlanca)){
				if(is_file("./vistas/contenidos/".$vistas."-view.php")){
					$contenido="./vistas/contenidos/".$vistas."-view.php";
				}else{
					$contenido="404";
				}
			}elseif ($vistas=="login" || $vistas=="index"){
				# code...
				$contenido="login";
			}else{
				$contenido="404";
			}
			return $contenido;
			}
		}
		