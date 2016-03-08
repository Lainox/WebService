<?php 
	
	function get_precio($valor){
		$libros=array(
			"java"=>599,
			"c"=>648,
			"css"=>400,
			"javascript"=>520,
			"redes"=>400,
			"python"=>310,
			"ruby"=>532
		);

		foreach($libros as $libro=>$precio)
		{
			if($libro==$valor){
				return $precio;
				break;
			}
		}
	}

 ?>