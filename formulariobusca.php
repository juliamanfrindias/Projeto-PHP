<?php
	
	if (strcasecmp('form-ajax', $_POST['metodo']) == 0) {
		$nome_form = $_POST['nome'];
		$html = 'Nome '.$_POST['nome'];
		$html .= "\n";

		//echo $html;
		
	}


	$dbname = "NewTeste";
	$usuario = "root";
	$senha = "julia01";


	$conexao = new mysqli("localhost", $usuario, $senha, $dbname) or die("Impossível conectar ao banco...");
	
	//var_dump($conexao);
	
	$sql_query = "SELECT Id, Nome FROM Nomes WHERE Nome = '$nome_form' ";

	$sql_result = $conexao->query($sql_query);

    //var_dump($sql_result);

	
	if ($sql_result->num_rows > 0) {
		//print("Registro já existe no banco\n");

		$row = mysqli_fetch_array($sql_result);
		$output = 'Nome ' .$row['Nome'];
		$output .= "\n";
		$output .= 'Id ' .$row['Id'];
		echo $output;
		
	}
	else{
		
	 	echo "Registro não inserido";
		 
	}



	$conexao->close();
	

?>