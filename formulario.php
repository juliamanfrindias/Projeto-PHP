
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Formulário de Busca</title>
  
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet" >
  <link href="css/bootstrap.css" rel="stylesheet" >
  <link href="css/style.css" rel="stylesheet">

</head>
<body>

	<div class="container" >

		<h1>Formulário de Pesquisa e Inserção</h1>

		<form id="formulario-ajax" >

			<div class="form-group">
				<label >Digite um nome:</label>
				<input type="text" name="nome" id="nome" class="form-control" placeholder="Pesquisar...">
				<br>
				<!--input type="submit" name="salvar" id="salvar" value="Salvar"-->	
				<!--input type="submit" name="buscar" id="buscar" value="Buscar"-->
				<input type="hidden" id="metodo" value="form-ajax">


			</div>
			
		</form>
		
		<button type="submit" id="salvar" class="btn btn-primary" >Salvar</button>
		<button type="submit" id="buscar" class="btn btn-default">Buscar</button>
		<br>
		<br>

		
		<textarea class="form-control input-lg" id="show" placeholder="Resultado da pesquisa"></textarea>

	</div> 

  

		<!--JAVASCRIPT-->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<script type="text/javascript" src="formulario.js"></script>
		<!--JAVASCRIPT-->	

  <!-- jQuery (necessario para os plugins Javascript do Bootstrap) -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>













