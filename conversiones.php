<?php

  /*Valores de Area de Terreno*/
	$terreno = $_POST['terreno'];
	$cantidad = $field_area_de_terreno;
	$valorunidadmed = $field_area_de_terreno[0]['view'];
	
	//Ciclo de Conversion de unidades de Medida
	
	// Convertion from Acres to ''
	if ($metrica == "Acres") {
		
		switch($terreno) {
			//Acre --> Hectarea
			case 'Hectares' :
				$resultado_tmp = $valorunidadmed * 0.4046863;
				$resultado1 = round($resultado_tmp, 4);
				print "<br>";
				echo("<b>Area de Terreno:</b>  $resultado1 Hectareas<BR>");
				break;
			//Acre --> Manzanas
			case 'Manzana' :
				$resultado_tmp = $valorunidadmed * 0.57912;
				$resultado1 = round($resultado_tmp, 4);
				print "<br>";
				echo("<b>Area de Terreno:</b>  $resultado1 Manzanas<BR>");
				break;
			//Acre --> Metros
			case 'Meters' :
				$resultado_tmp = $valorunidadmed * 4046.825;
				$resultado1 = $resultado_tmp;
				print "<br>";
				echo("<b><br>Area de Terreno:</b>  $resultado1 Metros<BR>");
				break;
			//Acre --> Varas
			case 'Varas' :
				$resultado_tmp = $valorunidadmed * 5791.21;
				$resultado1 = round($resultado_tmp, 4);
				print "<br>";
				echo("<b>Area de Terreno:</b>  $resultado1 Varas<BR>");
				break;
			//Acre --> Square Feets
			case 'Square_feet' :
				$resultado_tmp = $valorunidadmed * 43561.89;
				$resultado1 = round($resultado_tmp, 4);
				print "<br>";
				echo("<b>Area de Terreno:</b>  $resultado1 Square Feet<BR>");
				breaK;
			//Acres --> Cavalries
			case 'Cavalries' :
				$resultado_tmp = $valorunidadmed / 111.19742;
				$resultado1 = round($resultado_tmp, 4);
				print "<br>";
				echo("<b>Area de Terreno:</b>  $resultado1 Cavalries<BR>");
				break;
		}

	}// End Convertion from Acres.

	/*Si el valor ingresado con Caballerias*/
	if ($metrica == "Cavalries") {
		switch($terreno) {
			case 'Acres' :
				$resultado_tmp1 = $valorunidadmed * 109.3959;
				$resultado1 = $resultado_tmp1;
				echo("<br><b>Area de Terreno:</b>  <b>$resultado1 Acres</b><BR>");
				Break;
			case 'Hectares' :
				$resultado_tmp = $valorunidadmed * 45;
				$resultado1 = round($resultado_tmp, 4);
				/*$resultado1 = $resultado_tmp1;*/
				echo("<br><b>Area de Terreno:</b>  <b>$resultado1 Hectareas</b>");
				Break;
			case 'Meters':
				$resultado_tmp = $valorunidadmed * 450000;
				$resultado1 = round($resultado_tmp, 4);
				/*$resultado1 = $resultado_tmp1;*/
				echo("<b>Area de Terreno:</b>  <b>$resultado1 Metros<sup>2</sup></b>");
				Break;
			case 'Varas' :
				$resultado_tmp = $valorunidadmed * 643961.25;
				//Convirtiendo a metros
				/*$resultado_tmp2 = $resultado_tmp * 1.43115;*/
				$resultado1 = $resultado_tmp;
				echo("<BR><b>Area de Terreno:</b>  <b>$resultado1 Varas</b>");
				Break;
			case 'Square_feet' :
				$resultado_tmp = $valorunidadmed * 4843917.899;
				//Convirtiendo a metros
				//$resultado_tmp2 = $resultado_tmp * 3.282;
				//Convirtiendo a Pies
				$resultado1 = $resultado_tmp;
				echo("<BR><b>Area de Terreno:</b>  <b>$resultado1 Pies Cuadrados</b>");
				break;
			case'Manzana' :
				$resultado_tmp = $valorunidadmed * 64.3959;
				//Convirtiendo Manzanas
				$resultado1 = $resultado_tmp;
				echo("<BR><b>Area de Terreno:</b>  <b>$resultado1 Manzanas</b>");
				Break;
		}
	}

	// Convertion from Varas to ''
	if ($metrica == "Varas") {
		switch($terreno) {
			case 'Square_feet' :
				$resultado_tmp = $valorunidadmed * 7.52;
				//Square Feet
				$resultado1 = round($resultado_tmp, 4);
				echo("<BR><b>Area de Terreno:</b>  <b>$resultado1 Pies Cuadrados</b>");
				break;
			case 'Meters' :
				$resultado_tmp = $valorunidadmed * 0.6987;
				//Metros Cuadrados
				$resultado1 = round($resultado_tmp, 4);
				echo("<BR><b>Area de Terreno:</b>  <b>$resultado1 Square Meters </b>");
				break;
			case 'Hectares' :
				$resultado_tmp = $valorunidadmed * 0.0000698;
				//Varas Cuadradas --> Hectareas
				$resultado1 = round($resultado_tmp, 4);
				echo("<BR><b> Area de Terreno:</b> <b>$resultado1 Hectareas");
				break;
			case 'Acres' :
				$resultado_tmp = $valorunidadmed * 0.0001726;
				//Varas Cuadradas --> Acres
				$resultado1 = round($resultado_tmp, 4);
				echo("<BR><b> Area de Terreno:</b> <b>$resultado1 Acres");
				break;
			case 'Manzana' :
				$resultado_tmp = $valorunidadmed * 0.0001;
				//Varas Cuadradas --> Manzanas
				$resultado1 = round($resultado_tmp, 4);
				echo("<BR><b> Area de Terreno:</b> <b>$resultado1 Manzana");
				break;
			case 'Cavalries' :
				$resultado_tmp = $valorunidadmed * 0.00000155288847;
				$resultado1 = round($resultado_tmp, 4);
				echo("<BR><b>Area de Terreno:</b>  $resultado1 Cavalries");
			break;
		}

	}

	if ($metrica == "Hectares") {/**Convertion from Hectareas to ''*/
		switch($terreno) {
			//Hectareas to --> Acres
			case 'Acres' :
				$resultado_tmp = $valorunidadmed * 2.43102;
				$resultado1 = round($resultado_tmp, 4);
				echo("<BR><b>Area de Terreno:</b>  $resultado1 Acres");
				break;
			//Hectareas to --> Meters
			case 'Meters' :
				$resultado_tmp = $valorunidadmed * 10000;
				$resultado1 = round($resultado_tmp, 4);
				print "<br>";
				echo("<BR><b>Area de Terreno:</b>  $resultado1 Meters");
				break;
			//Hectareas to --> varas
			case 'Varas' :
				$resultado_tmp = $valorunidadmed * 14310.25;
				$resultado1 = round($resultado_tmp, 4);
				echo("<BR><b>Area de Terreno:</b>  $resultado1 Varas");
				break;
			//Hectareas to --> Square Feets
			case 'Square_feet' :
				$resultado_tmp = $valorunidadmed * 107639.09999999999;
				$resultado1 = round($resultado_tmp, 4);
				echo("<BR><b>Area de Terreno:</b>  $resultado1 Square feet");
				break;
			//Hectareas to --> Manzanas
			case 'Manzana' :
				$resultado_tmp = $valorunidadmed * 1.430828;
				$resultado1 = round($resultado_tmp, 4);
				echo("<BR><b>Area de Terreno:</b>  $resultado1 Manzanas");
				break;
			//Hectareas to --> Cavalries
			case 'Cavalries' :
				$resultado_tmp = $valorunidadmed * 0.02222;
				$resultado1 = round($resultado_tmp, 4);
				echo("<BR><b>Area de Terreno:</b>  $resultado1 Cavalries");
				break;
		}
	}//End Convertion from Hectareas to ''

	if ($metrica == "Manzana") {/**Convertion from Manzana to ''*/
		switch($terreno) {
			//Manzana to --> Acres
			case 'Acres' :
				$resultado_tmp = $valorunidadmed * 1.7270098152957587;
				$resultado1 = round($resultado_tmp, 4);
				echo("<BR><b>Area de Terreno:</b>  $resultado1 Acres");
				break;
			//Manzana to --> Meters
			case 'Meters' :
				$resultado_tmp = $valorunidadmed * 6988.960238407411;
				$resultado1 = round($resultado_tmp, 4);
				echo("<BR><b>Area de Terreno:</b>  $resultado1 Meters");
				break;
			//Manzana to --> Varas
			case 'Varas' :
				$resultado_tmp = $valorunidadmed * 10000;
				$resultado1 = round($resultado_tmp, 4);
				echo("<BR><b>Area de Terreno:</b>  $resultado1 Varas");
				break;
			//Manzana to --> Square Feets
			case 'Square_feet' :
				$resultado_tmp = $valorunidadmed * 75228.53899979591;
				$resultado1 = round($resultado_tmp, 4);
				echo("<BR><b>Area de Terreno:</b>  $resultado1 Square feet");
				break;
			//Manzana to --> Hectares
			case 'Hectares' :
				$resultado_tmp = $valorunidadmed * 0.6988960238407412;
				$resultado1 = round($resultado_tmp, 4);
				echo("<BR><b>Area de Terreno:</b>  $resultado1 Hectares");
				break;
			//Manzana to --> Cavalries *PENDIENTE*
			case 'Cavalries' :
				$resultado_tmp = $valorunidadmed * 0.0155289;
				$resultado1 = round($resultado_tmp, 4);
				echo("<BR><b>Area de Terreno:</b>  $resultado1 Cavalries");
				break;
		}
	}//End Convertion from Manzana to ''

	if ($metrica == "Meters2") {/**Convertion from Meters to ''*/
		switch($terreno) {
			//Meters to --> Acres
			case 'Acres' :
				$resultado_tmp = $valorunidadmed * 0.0002471054;
				$resultado1 = round($resultado_tmp, 4);
				print "<br>";
				echo("<BR><b>Area de Terreno:</b>  $resultado1 Acres");
				break;
			//Meters to --> Hectares
			case 'Hectares' :
				$resultado_tmp = $valorunidadmed * 0.0001;
				$resultado1 = round($resultado_tmp, 4);
				print "<br>";
				echo("<BR><b>Area de Terreno:</b>  $resultado1 Hectares");
				break;
			//Meters to --> varas
			case 'Varas' :
				$resultado_tmp = $valorunidadmed * 1.4308;
				$resultado1 = round($resultado_tmp, 4);
				print "<br>";
				echo("<BR><b>Area de Terreno:</b>  $resultado1 Varas");
				break;
			//Meters to --> Square Feets
			case 'Square_feet' :
				$resultado_tmp = $valorunidadmed * 10.76391;
				$resultado1 = round($resultado_tmp, 4);
				print "<br>";
				echo("<BR><b>Area de Terreno:</b>  $resultado1 Square feet");
				break;
			//Meters to --> Manzanas
			case 'Manzana' :
				$resultado_tmp = $valorunidadmed * 0.0001430828;
				$resultado1 = round($resultado_tmp, 4);
				print "<br>";
				echo("<BR><b>Area de Terreno:</b>  $resultado1 Manzana");
				break;
			//Meters to --> Cavalries
			case 'Cavalries' :
				$resultado_tmp = $valorunidadmed * 0.000002222;
				/*Pendiente*/
				$resultado1 = round($resultado_tmp, 4);
				print "<br>";
				echo("<BR><b>Area de Terreno:</b>  $resultado1 Cavalries");
				break;
		}
	}//End Convertion from Meters to ''

	if ($metrica == "feet") {/**Convertion from Square_feet to ''*/
		switch($terreno) {
			//Square_feet to --> Acres
			case 'Acres' :
				$resultado_tmp = $valorunidadmed * 0.000022956843749158068;
				$resultado1 = round($resultado_tmp, 5);
				/*$resultado1 = round($resultado_tmp, 4);*/
				echo("<BR><b>Area de Terreno:</b>  $resultado1 Acres");
				break;
			//Square_feet to --> Meters
			case 'Meters' :
				$resultado_tmp = $valorunidadmed * 0.09290304359661128;
				$resultado1 = round($resultado_tmp, 4);
				echo("<BR><b>Area de Terreno:</b>  $resultado1 Meters <sup>2</sup>");
				break;
			//Square_feet to --> varas
			case 'Varas' :
			
				$resultado_tmp = $valorunidadmed * 0.1329787234;
				$resultado1 = round($resultado_tmp, 4);
				echo("<BR><b>Area de Terreno:</b>  $resultado1 Varas");
				break;
			//Square_feet to --> Hectares
			case 'Hectares' :
				$resultado_tmp = $valorunidadmed * 0.000009290304359661129;
				$resultado1 = round($resultado_tmp, 4);
				echo("<BR><b>Area de Terreno:</b>  $resultado1 Hectares");
				break;
			//Square_feet to --> Manzanas
			case 'Manzana' :
				$resultado_tmp = $valorunidadmed * 0.000013292827606325211;
				$resultado1 = round($resultado_tmp, 4);
				echo("<BR><b>Area de Terreno:</b>  $resultado1 Manzana");
				break;
			//Square_feet to --> Cavalries
			case 'Cavalries' :
				$cabelleria = 4843969.77;
				$uno = 1 / $cabelleria;
				$resultado_tmp = $uno * $valorunidadmed;
				$resultado1 = round($resultado_tmp, 7);
				echo("<BR><b>Area de Terreno:</b>  $resultado1 Cavalries");
				break;
		}
	}//End Convertion from Square_feet to ''
	echo '<form id="conversion" method="post" action=""';

	echo("<td><input type=\"text\" size=\"10\" value=\" $valorunidadmed\" name=\"value\" class=\"input\" ></td>");
	echo '<select name="terreno">';
	echo '<option value="Acres"> Acres </option>';
	echo '<option value="Varas">Varas2</option>';
	echo '<option value="Meters">Metros2 </option>';
	echo '<option value="Square_feet">Pies2 </option>';
	echo '<option value="Manzana">Manzanas</option>';
	echo '<option value="Cavalries">Caballerías</option>';
	echo '<option value="Hectares">Hectáreas</option>';
	echo '</select>';
	echo '<input type="submit" name="submit" value="convertir">';
	echo("</form>");

?>

