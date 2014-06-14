<?php 
	$array_para_ordenar = array(
		array('codigo' => 11, 'nombre' => 'frank', 'apellido' => 'leal'),
		array('codigo' => 1105, 'nombre' => 'andres', 'apellido' => 'perdomo'),
		array('codigo' => 2, 'nombre' => 'felipe', 'apellido' => 'cardenas'),
		array('codigo' => 22, 'nombre' => 'carlos', 'apellido' => 'rodriguez'),
		array('codigo' => 11056, 'nombre' => 'sara', 'apellido' => 'leon'),
		array('codigo' => 1, 'nombre' => 'jairo', 'apellido' => 'valencia')
	);

	$array_ordenado = array( 
		array( 'codigo' => 1 ),
		array( 'codigo' => 11 ),
		array( 'codigo' => 1105 ),
		array( 'codigo' => 11056 ),
		array( 'codigo' => 2 ),
		array( 'codigo' => 22 )
	);

	$nuevo_array_ordenado = array();
	$count = 0;

	foreach ( $array_ordenado as $item_ordenado ) {
		$codigo = intval( $item_ordenado[ 'codigo' ] );

		foreach ( $array_para_ordenar as $key => $item_para_ordenar ) {
			$codigo2 = intval( $item_para_ordenar[ 'codigo' ] );
			if ( $codigo == $codigo2 ) {
				$nuevo_array_ordenado[ $count ] = $item_para_ordenar;
				unset( $array_para_ordenar[ $key ] );
				continue;
			}
		}

		$count++;

	}
	var_dump( $nuevo_array_ordenado );
?>