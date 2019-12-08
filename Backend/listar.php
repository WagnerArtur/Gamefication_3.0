<?php 		
	/*print_r($_GET); */
	$db="id8089249_bd_gamification";		
	$user="id8089249_root";
	$server="localhost";		
	$pwd="123456";
	$con= @mysqli_connect($server,$user, $pwd, $db) or die ("Falha na conexao".mysqli_error());		
	mysqli_select_db($con,$db) or die("Falha na conexao com banco de dados".mysqli_error($con));
		

		    $query1 = mysqli_query($con, "SELECT id_avaliacao, nome_jogo, adaptabilidade, assiduidade, atencao, descricao, CASE WHEN avaliado = 1 THEN 'Danubia' WHEN avaliado = 2 THEN 'Joao' WHEN avaliado = 3 THEN 'Railton' ELSE 'Indefinido' end as avaliado FROM tb_avaliacao"); 

			while($game = mysqli_fetch_array($query1)){
                    $nome_jogo = $game['nome_jogo'];
                    $avaliado = $game['avaliado'];
                    $adaptabilidade = $game['adaptabilidade'];
                    $assiduidade = $game['assiduidade'];
                    $atencao = $game['atencao'];
                    $descricao = $game['descricao'];

                    $return_arr[] = array("nome_jogo" => $nome_jogo,
                                        "avaliado" => $avaliado,
                                        "adaptabilidade" => $adaptabilidade,
                                        "assiduidade" => $assiduidade,
                                        "atencao" => $atencao,
                                        "descricao" => $descricao
                                        );

}    
            echo json_encode($return_arr), "\n";
            

?> 