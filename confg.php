<?php require_once("include/conn.php"); ?>
<?php session_start(); ?>
<?php 	
 	class conta_Digital_Cadastro{
 		function cadastrandoUsuario($con, $conta_Digital_Acesso, $nome, $sobrenome, $email, $senha, $senhaCriptografada){ 			
			$sqlInsertUsuarioDB = "INSERT INTO usuarios(nome, sobrenome, email, senha) VALUES(:nome, :sobrenome, :email, :senha)";
			$insertUsuarioDB = $con->prepare($sqlInsertUsuarioDB);
			$insertUsuarioDB->bindParam(':nome', $nome);
			$insertUsuarioDB->bindParam(':sobrenome', $sobrenome);
			$insertUsuarioDB->bindParam(':email', $email);
			$insertUsuarioDB->bindParam(':senha', $senhaCriptografada);
			if($insertUsuarioDB->execute()){								
				$conta_Digital_Acesso->Acessando($con, $email, $nome, $sobrenome, $senhaCriptografada, $senha, 1);									   
			}else{ echo json_encode("Erro ao cadastrar!"); }
		}
		function validacao_Cadastro($con, $ferramentas, $conta_Digital_Acesso){									
			$nome 				= $_POST['nomeCadastroUsuario'] ?? "";
			$sobrenome 			= $_POST['sobrenomeCadastroUsuario'] ?? "";
			$email 				= $_POST['emailCadastroUsuario'] ?? "";
			$confirmacaoDeEmail = $_POST['confirmacaoDeEmailCadastroUsuario'] ?? "";
			$senha 				= $_POST['senhaCadastroUsuario'] ?? "";
			$confirmacaoDeSenha = $_POST['confirmacaoDeSenhaCadastroUsuario'] ?? "";		
			$nome  					= $ferramentas->filtrando($nome); 
			$sobrenome 				= $ferramentas->filtrando($sobrenome); 
			$email 					= $ferramentas->filtrando($email);
			$confirmacaoDeEmail 	= $ferramentas->filtrando($confirmacaoDeEmail);
			$senha 					= $ferramentas->filtrando($senha);
			$confirmacaoDeSenha 	= $ferramentas->filtrando($confirmacaoDeSenha);			

			$msg = ($nome == "") ? "Informe seu nome!": "";
			$msg = ($msg == "") ? $msg = ($sobrenome == "") ? "Informe seu sobrenome!"			: "": $msg;
			$msg = ($msg == "") ? $msg = ($email == "") ? "Informe seu E-mail!"					: "": $msg;
			$msg = ($msg == "") ? $msg = ($confirmacaoDeEmail == "") ? "Confirme seu E-mail!"	: "": $msg;
			$msg = ($msg == "") ? $msg = ($senha == "") ? "Informe sua senha"					: "": $msg;
			$msg = ($msg == "") ? $msg = ($confirmacaoDeSenha == "") ? "Confirme sua senha"	: "tudo preenchido": $msg;

			if($msg == "tudo preenchido"){
				$email = filter_var($email, FILTER_SANITIZE_EMAIL);
				if(filter_var($email, FILTER_VALIDATE_EMAIL)){
					$retornoEmail = $ferramentas->verificaSeEmailExiste($con, $ferramentas, $email);
					if($retornoEmail['email'] == ""){
						if($confirmacaoDeEmail === $email){							
							$contasenhausu = strlen($senha);
							if($contasenhausu >= 8){
								if(!is_numeric($senha)){
									if(preg_match('@[0-9]@', $senha)){
									   	if(preg_match('/\p{Lu}/u', $senha)){									   		
											if($confirmacaoDeSenha === $senha){																					 
										    	$options = ['cost' => 10,];												
												$senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT, $options);												
												$this->cadastrandoUsuario($con, $conta_Digital_Acesso, $nome, $sobrenome, $email, $senha, $senhaCriptografada);
											}else{ echo json_encode('As senhas não iguais!'); }
									   	}else{ echo json_encode("Digite pelo menos uma letra maiuscula"); }
									}else{ echo json_encode("Digite pelo menos um número"); }
								}else{ echo json_encode("Senha muito fraca fortaleça com letras por exemplo!"); }
							}else{ echo json_encode('Senha muito pequena no minimo 8 caracteres!'); }
						}else{ echo json_encode('Os E-mails não estão iguais!'); }
					}else{ echo json_encode('Este E-mail! já foi cadastrado'); }
				}else{ echo json_encode('Informe um E-mail válido!'); }
			}else{ echo json_encode($msg); }
		}
 	}
 	class conta_Digital_Acesso{
 		function Acessando($con, $emailDB, $nomeDB, $sobrenomeDB, $senhaDB, $senhaDigitada, $parametro){
			if(password_verify($senhaDigitada, $senhaDB)){	
				$_SESSION['logado']		= "sim";
				$_SESSION['email'] 		= $emailDB;
				$_SESSION['nome'] 		= $nomeDB;
				$_SESSION['sobrenome'] 	= $sobrenomeDB;		
				switch($parametro){
					case 0:
						echo json_encode("Senha certa pronto para logar!");
					break; case 1:
						echo json_encode("Cadastrado com sucesso!");
					break;
				}				
			}else{ echo json_encode("Senha Incorreta! - ".$senhaDB." = ".$senhaDigitada); }
		}
 		function validacao_Acesso($con, $ferramentas){
 			$emaiLogin 	= $_POST['emaiLogin'];
 			$senhaLogin = $_POST['senhaLogin'];
 			$emaiLogin	= $ferramentas->filtrando($emaiLogin);
			if(isset($emaiLogin) AND !empty($emaiLogin)){
				$emaiLogin = filter_var($emaiLogin, FILTER_SANITIZE_EMAIL);
				if(filter_var($emaiLogin, FILTER_VALIDATE_EMAIL)){
					if(isset($senhaLogin) AND !empty($senhaLogin)){
						$contasenha = strlen($senhaLogin);
						if($contasenha >=8){							
							$retornoEmail = $ferramentas->verificaSeEmailExiste($con, $ferramentas, $emaiLogin);														
							if($retornoEmail['msg'] != "Erro"){								
								$this->Acessando($con, $retornoEmail['email'], $retornoEmail['nome'], $retornoEmail['sobrenome'], $retornoEmail['senha'], $senhaLogin, 0);
							}else{ echo json_encode("Este E-mail Não está cadastrado"); }
						}else{ echo json_encode("Senha inválida!"); }
					}else{ echo json_encode("Você Precisa informar sua senha!"); }
				}else{ echo json_encode("Você Precisa informar um E-mail válido!"); }
			}else{ echo json_encode("Você Precisa informar seu E-mail!"); }
 		}
 	}
 	class ferramentas{
 		function verificaSeEmailExiste($con, $ferramentas, $email){						
			$sqlverificaEmail = "SELECT * FROM usuarios WHERE email=:email LIMIT 1";
			$verificaEmail = $con->prepare($sqlverificaEmail);
			$verificaEmail->bindParam(':email', $email);			
			if($verificaEmail->execute()){
				$result = $verificaEmail->fetchAll(PDO::FETCH_ASSOC);
				$retornado["msg"] 		= ""; 
				$retornado["email"] 	= ""; 
				$retornado["senha"] 	= "";
				$retornado["nome"] 		= ""; 
				$retornado["sobrenome"] = "";				
				foreach($result as $retorno){ 
					$retornado["email"] 	= $retorno["email"];
					$retornado["senha"] 	= $retorno["senha"];
					$retornado["nome"] 		= $retorno["nome"];
					$retornado["sobrenome"] = $retorno["sobrenome"];					
				}
				if($retornado["email"] == ""){ $retornado["msg"] = "Erro"; }
			}else{ $retornado["msg"] = "Erro"; }
			
			return $retornado;			
		}
 		function filtrando($dados){
			$dados = trim($dados);
			$dados = htmlspecialchars($dados);			
			$dados = addslashes($dados);
			return $dados;		
		}
		function sair(){			
			session_unset();
			session_destroy();
			echo json_encode("saiu");
		}	
 	} 	
	class inicio{
		function iniciando(){
			$banco = new banco;
			$con = $banco->conexao();

			$ferramentas = new ferramentas;
			$conta_Digital_Acesso = new conta_Digital_Acesso;
			$conta_Digital_Cadastro = new conta_Digital_Cadastro;

			if(isset($_POST['sair'])){
				$ferramentas->sair();
			}

			// $_POST['nomeCadastroUsuario'] = "aaa";
			// $_POST['sobrenomeCadastroUsuario'] = "bbb";
			// $_POST['emailCadastroUsuario'] = "aaaa@gmail.com";
			// $_POST['confirmacaoDeEmailCadastroUsuario'] = "aaaa@gmail.com";
			// $_POST['senhaCadastroUsuario'] = "12345678A";
			// $_POST['confirmacaoDeSenhaCadastroUsuario'] = "12345678A";
			if(isset($_POST['nomeCadastroUsuario'])){
				$conta_Digital_Cadastro->validacao_Cadastro($con, $ferramentas, $conta_Digital_Acesso);				
			}
			// $_POST['emaiLogin'] = "sdfds@gmail.com";
			// $_POST['senhaLogin'] = "12345678A";
			if(isset($_POST['emaiLogin'])){
				$conta_Digital_Acesso->validacao_Acesso($con, $ferramentas);				
			}
		}
	}
	
	$inicio = new inicio;
	$inicio->iniciando();
	



?>