<?php
	
	if (strcasecmp('form-ajax', $_POST['metodo']) == 0) {
		$nome_form = $_POST['nome'];
		$html = 'Nome '.$_POST['nome'];
		$html .= "\n";

		///echo $html;
		
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
		print("Registro já existe no banco\n");
		$row = mysqli_fetch_array($sql_result);
	
		$html = 'Nome ' .$row['Nome'];
		$html .= "\n";
		echo $html;

	}
	else{
		
		$sql_query = 'INSERT INTO Nomes (Nome) VALUES ("'. $nome_form . '")';
		
		$sql = $conexao->query($sql_query) or die("Erro");
		
		//var_dump($sql);
		
		if ($sql == true) {
		    echo "Inserido com sucesso";
		} 
	}



	$conexao->close();
	

?>