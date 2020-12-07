<!DOCTYPE HTML>

<hmtl lang="es">
	<head>
		<meta charset="utf-8">

		<link rel="stylesheet" type="text/css" href="style.css">
	</head>


	<?PHP
	require('fpdf.php');
		
		

		if( isset($_POST['check']) )
		{
        	
/*
		     	//Creacion de PDF
		     	$pdf=new FPDF(); 
		   		$pdf->AddPage();  //Agregar una pagina
		  		$pdf->SetFont('Arial','',12);    //Letra Arial, regular, tam. 12
		   		
		   		foreach($_POST as $clave => $respuesta)
		   		{
		   			if($clave != "check")
		   			{
		   				$pdf->Cell(0,20,$respuesta);
		   				$pdf->Ln();
		   				
		   			}
		   			else
		   			{
		   				$respuestaOpciones = ''; //variable limpia
		   				foreach($_POST['check'] as $opcion)
		   				{
		   				
		   					$respuestaOpciones = $respuestaOpciones . ' ' .$opcion;
		   				}
		   				$pdf->Cell(0,20,$respuestaOpciones);
		   				$pdf->Ln();

		   			}

		   		}
		   		
		   		
		   		var_dump($_POST);
		    	//Nombre del archivo de salida
		   		//$fichero = $pdf->Output('S','PDF_Brief_'.$_POST['nombre'].'.pdf');
		   		echo "<br>" .$_POST['nombre']." ,Briefing Report has been generated. Please, close this window. Thanks for your time!";
*/

		   		//var_dump($fichero);
		   		//Mandar por email el fichero generado.
		   		$to = "at.almansa@gmail.com";  	// 07/12/20 - Cambio tras leer en documentacion que SMTP necesita FROM con una dirección perteneciente a dominio
		   		$subject = "Briefing ...";
		   		$message = "Mensaje de pruebas...";
		   		$headers = "From:survey@maisqueumlogo.com.br";


		   		echo mail($to,$subject, $message, $headers);
		}
     	

	?>

</hmtl>	