<?php 
	
	$db="id8089249_bd_gamification";		
	$user="id8089249_root";
	$server="localhost";		
	$pwd="123456";
	$con= @mysqli_connect($server,$user, $pwd, $db) or die ("Falha na conexao".mysqli_error());		
	 
	mysqli_select_db($con,$db) or die("Falha na conexao com banco de dados".mysqli_error($con));
	
?>	

<!DOCTYPE HTML>

<html>
	<head>
		<title>Gamefication</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="stylesheet" href="../css/style.css" />		
	</head>
	
	
	<body>

		<!-- Wrapper -->
			<div  id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<nav>
							<a  style="background-color: black; padding-left: 5%; " id="header" class="logo" href="../index.html"><strong>GAME</strong><span>FICATION</span></a>
						</nav>
					</header>			

				<!-- Main -->
					<body style="margin:5%">
								<section>
							<h1 class="heading wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms"> <span>AVALIAÇÃO</span></h1>
									<pre>
 Estamos iniciando o processo de avaliação do 2° semestre de 2019, 
 a avaliação será realizada do dia 18/12/2019 a 25/12/2019.

 Queremos saber seu feedback para continuar melhorando.
										
 Responda a avaliação de cada membro da equipe.
										
 Suas respostas são anônimas.
									</pre>
								<form action="save.php?go=cadastrar" id='formulario' method="post">
								
									    <div class="field">
											<label for="nome_jogo">Seu Nome:</label>
											<input type="text" name="nome_jogo" id="nome_jogo" size=45 maxlength=45 />
										</div>
										
										<div>
										<select for ="avaliado" name="avaliado" id="avaliado">
											<option value=''>Selecione o avaliado</option>
											<option value='1'>Danubia</option>
											<option value='2'>Joao</option>
											<option value='3'>Railton</option>
										</select>
										</div>
										
										<div>
												<label for="adaptabilidade" name="adaptabilidade" id="adaptabilidade">Adaptabilidade</label>
												<input type="radio" name="adaptabilidade" value="1" id="adap1"><label for="adap1"> 1 </label>
												<input type="radio" name="adaptabilidade" value="2" id="adap2"><label for="adap2"> 2 </label>	
												<input type="radio" name="adaptabilidade" value="3" id="adap3"><label for="adap3"> 3 </label>
												<input type="radio" name="adaptabilidade" value="4" id="adap4"><label for="adap4"> Não se aplica </label>	
	
										</div>

										<div>
										
												<label for="assiduidade" name="assiduidade" id="assiduidade">Assiduidade</label>
													<input type="radio" name="assiduidade" value="1" id="assid1"><label for="assid1"> 1 </label>
													<input type="radio" name="assiduidade" value="2" id="assid2"><label for="assid2"> 2 </label>	
													<input type="radio" name="assiduidade" value="3" id="assid3"><label for="assid3"> 3 </label>
													<input type="radio" name="assiduidade" value="4" id="assid4"><label for="assid4"> Não se aplica </label>	
	
											</div>
											<div>
										
											<label for="atencao" name="atencao" id="atencao">Atenção</label>
												<input type="radio" name="atencao" value="1" id="aten1"><label for="aten1"> 1 </label>
												<input type="radio" name="atencao" value="2" id="aten2"><label for="aten2"> 2 </label>	
												<input type="radio" name="atencao" value="3" id="aten3"><label for="aten3"> 3 </label>
												<input type="radio" name="atencao" value="4" id="aten4"><label for="aten4"> Não se aplica </label>	
												</div>
			
										<div class="field">
											<label for="descricao">DESCRIÇÃO</label>
											<input type="text" name="descricao" id="descricao" size=450 maxlength=450 />
										</div>
										<div>
										<input class="btn btn-default wow bounceIn" data-wow-duration="500ms" data-wow-delay="1300ms" type="submit" name="enviar2" value="cadastrar" role="button" />
										<input type="button" class="btn btn-warning" id="btnUpdate" value="Alterar">
										<input type="button" class="btn btn-danger" id="btnDelete" value="Excluir">
                                        <input type="button" class="btn btn-secondary" id="btnList" value="Listar" onclick="window.location='listar.php';">
                                        										<div>

                                        </form>
							</section>
							<section>
							<div class="row">
								<div class="col-sm-12">
								<form action="listar.php?go=Listar" id='formulario' method="post">

									<table id="grid-contatos" class="table table-striped">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">NOME</th>
												<th scope="col">Avaliado</th>
												<th scope="col">Adaptabilidade</th>
												<th scope="col">Assiduidade</th>
											</tr>
										</thead>
										
										<tbody id="table-contatos">
											<?php	
											$result = $obj_mysqli->query ("SELECT * FROM 'tb_avaliacao'"); 
											while ($aux_query = $result->fetch_assoc())     
											{   
												echo '<tr>';   
												echo ' <tr>'.$aux_query["id_avaliacao"].'</tr>';   
												echo ' <tr>'.$aux_query["nome_jogo"].'</tr>';   
												echo ' <tr>'.$aux_query["avaliado"].'</tr>';   
												echo ' <td><a href="'.$_SERVER["PHP_SELF"].'?id=' .$aux_query["Id"]. '">  Editar</a></td>';
												echo '</tr>'; 
											}
											?>
										</tbody>
									</table>
								</div>
							</div>
						</section>
					</body>
					<footer class="rodape">
							<div>
								<p>Copyright &copy; 2019 - Todos os direitos reservados. Design e Desenvolvido por Wagner Artur.</p>
							</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>