<?php 
	function loadClass($class){
		require $class. ".php";
	}

	spl_autoload_register("loadClass");

	$stagiaire2 =  new Stagiaire ("celine", 0712563654, "1983-08-6")
 ?>