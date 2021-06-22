//Esses dados Poderiam vir do banco de dados...
	function emprestimoConsignado(){
		var corpoDaOpcaoConsignado = {
			titulo: "<u class='text-center text-info'><h1>Empréstimo Consignado</h1></u>",
			descricao: "<p class='text-secondary'>O Empréstimo consignado é um tipo de empréstimo pessoal em que o pagamento das parcelas é descontado diretamente no seu contracheque, holerite ou benefício do INSS. É uma ótima opção de empréstimo fácil, para servidores públicos, aposentados do INSS ou funcionários de empresas privadas, pois tem uma das menores taxas do mercado.</p>",
		}	
		document.getElementById("linhaDinamicaDeEmprestimos").innerHTML = 
		corpoDaOpcaoConsignado.titulo+corpoDaOpcaoConsignado.descricao;	
	}
	function emprestimoAutomatico(){
		var corpoDaOpcaoAutomatico = {
			titulo: "<u class='text-center text-info'><h1>Empréstimo Automático</h1></u>",
			descricao: "<p class='text-secondary'>Empréstimo rápido com liberação automática e sem burocracia.<br/>O CréditoParaTodxs Automático é uma opção de empréstimo com contratação simples e fácil e para você usar como quiser.</p>",
			vantagens: "<div class='border rounded p-2'><h3>Vantagens</h3><h6><u>Prazo para Pagar:</u></h6><h6><u>Tipo de Parcelas:</u></h6><h6><u>Flexibilidade:</u></h6></div>",			
		}
		document.getElementById("linhaDinamicaDeEmprestimos").innerHTML = 
		corpoDaOpcaoAutomatico.titulo+corpoDaOpcaoAutomatico.descricao+corpoDaOpcaoAutomatico.vantagens;
	}
//----
function selecionando_Emprestimo(){
	var opcoesDeEmprestimos = document.getElementsByClassName("opcoesDeEmprestimos");

	var definindoAcaoPeloTipoDeEmprestimo = function() {
	    var tipoDeEmprestimo = this.id;
	    switch(tipoDeEmprestimo){
	    	case "automatico":
	    		emprestimoAutomatico();
	    	break;
	    	case "consignado":;
	    		emprestimoConsignado();
	    	break;
	    }
	};
	for (var i = 0; i < opcoesDeEmprestimos.length; i++) {
	    opcoesDeEmprestimos[i].addEventListener('click', definindoAcaoPeloTipoDeEmprestimo, false);
	}
}
function conta_Digital_Acesso_E_Cadastro(){
	function sairDeslogar(){
		var btSair = document.getElementById("btSair");
		if(btSair){
			btSair.addEventListener("click", function(){
				ferramentas("Aguarde", 1, 0);
				var sair = "sair";
				$.ajax({
					url: "confg.php",
					type: "POST",
					data: {"sair": sair},
					dataType: "json",
					success: function(retorno){
						ferramentas("Aguarde", 0, 0);
						if(retorno == "saiu"){
							ferramentas("Recarregar", 0, 0);
						}else{ alert(retorno); }
					}
				});
			});
		}
			
	}
	function validando_Cadastro(){
		$("#formCadastroUsu").submit(function(ev){			
			ev.preventDefault();
			var formCadastroUsu = $("#formCadastroUsu");
			formCadastroUsu = formCadastroUsu.serialize();
			var carregandoGIF = document.querySelector(".carregandoGIF");
			carregandoGIF.innerHTML = "<div class='spinner-border text-success' role='status'><span class='sr-only'>Todxs...</span></div>";
			$.ajax({
				url: 'confg.php',
				type: 'post',
				data: formCadastroUsu,
				dataType: 'json',
				success: function(retorno){
					carregandoGIF.innerHTML = "";
					if(retorno === "Cadastrado com sucesso!"){
						alert(retorno);
						ferramentas("Recarregar", 0, 0);
					}else{ alert(retorno); }		
				}
			});			
		});
	}
	function esqueci_Minha_Senha(){
		var esqueciMinhaSenha = document.getElementById("esqueciMinhaSenha");
		if(esqueciMinhaSenha){
			esqueciMinhaSenha.addEventListener("click", function(){
				alert("Enviar Senha de recuperação por E-mail pelo PHPMailer");
			});
		}		
	}
	function validando_Acesso(){
		$("#formLoginUsuario").submit(function(ev){		
			ev.preventDefault();			
			var formLoginUsuario = $("#formLoginUsuario");
			formLoginUsuario = formLoginUsuario.serialize();
			var carregandoGIF = document.querySelector(".carregandoGIF");
			carregandoGIF.innerHTML = "<div class='spinner-border text-success' role='status'><span class='sr-only'>Todxs...</span></div>";
			$.ajax({
				url: 'confg.php',
				type: 'post',
				data: formLoginUsuario,
				dataType: 'json',
				success: function(retorno){
					carregandoGIF.innerHTML = "";
					if(retorno === "Senha certa pronto para logar!"){										
						ferramentas("Recarregar", 0, 0);
					}else{ alert(retorno); }
				}
			});
		});
	}
	function abrindo_Modal_De_Acesso(){
		var btModalContaDigital = document.getElementById("btModalContaDigital");
		if(btModalContaDigital){
			btModalContaDigital.addEventListener("click", function(){
				document.querySelector(".modal-content").innerHTML =
				"<div class='modal-header text-center'>"+
					"<h4 class='text-center text-primary'>Código Para Todxs</h4>"+
					"<button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>"+
				"</div>"+
				"<h4 class='text-center text-primary'>Acessar Conta Digital</h4>"+
				"<form class='form-control' id='formLoginUsuario'>"+
					"<ul class='m-0 p-0'>"+
						"<li>"+
							"<input type='text' name='emaiLogin' class='form-control text-center' placeholder='Digite seu E-mail:' id=''/>"+
						"</li><li>"+
							"<input type='password' name='senhaLogin' class='form-control text-center' placeholder='Digite sua Senha:' id=''/>"+
						"</li><li>"+
							"<button type='submit' class='form-control btn btn-lg btn-outline-primary mt-4'>Entrar</button>"+
						"</li><li>"+
							"<u id='esqueciMinhaSenha'>Esqueci minha senha</u>"+
						"</li><li class='text-center'><div class='carregandoGIF'></div></li>"+
					"</ul>"+
				"</form>"+
				"<form class='form-control' id='formCadastroUsu'>"+
					"<ul class='m-0 p-0'>"+
						"<li>"+
							"<h4 class='text-center text-primary mt-4'>Criar Conta Digital</h4>"+
						"</li><li>"+
							"<input type='text' name='nomeCadastroUsuario' class='form-control border-primary text-center mt-4' placeholder='Nome:' id=''/>"+
						"</li><li>"+
							"<input type='text' name='sobrenomeCadastroUsuario' class='form-control border-primary text-center mt-4' placeholder='Sobrenome:' id=''/>"+
						"</li><li>"+
							"<input type='text' name='emailCadastroUsuario' class='form-control border-primary text-center mt-3' placeholder='Digite seu E-mail Válido:' id=''/>"+
						"</li><li>"+
							"<input type='text' name='confirmacaoDeEmailCadastroUsuario' class='form-control border-primary text-center mt-3' placeholder='Confirme seu E-mail:' id=''/>"+
						"</li><li>"+
							"<input type='password' name='senhaCadastroUsuario' class='form-control border-primary text-center mt-3' placeholder='Digite sua Senha:' id=''/>"+
						"</li><li>"+
							"<input type='password' name='confirmacaoDeSenhaCadastroUsuario' class='form-control border-primary text-center mt-3' placeholder='Confirme sua Senha:' id=''/>"+
						"</li>"+
						"<li>"+
							"<p><h6>"+
								"Cadastrando-se Você automaticamente aceita a nossa <b><a href='politicadeprivacidade.php'>política de privacidade e termos de uso!</a></b>"+
							"</h6></p>"+
						"</li><li>"+
							"<button type='submit' class='form-control btn-lg btn-outline-primary mt-3'>Cadastrar</button>"+
						"</li>"+
					"</ul>"+
				"</form>"
				validando_Cadastro();
				esqueci_Minha_Senha();
				validando_Acesso();

			});	
		}		
	}
	sairDeslogar();
	abrindo_Modal_De_Acesso();	
}
function ferramentas(parametro, segundoparametro, terceiroparametro){	
	switch(parametro){		
		case "Recarregar":			
			location.reload();
		break;
		case "Toggle":						
			var onOff=0;
			segundoparametro.addEventListener("click", function(){					
				if(onOff == 0){
					onOff=1;
					document.getElementById(terceiroparametro).style.display = "block";							
				}else{
					onOff=0;
					document.getElementById(terceiroparametro).style.display = "none";						
				}
			});
		break;
		case "Aguarde":
			var aguarde = document.querySelector("#aguarde");
			switch(segundoparametro){
				case 0:
					aguarde.style.height = "0px";
					aguarde.innerHTML = "";
				break; 
				case 1:								
					aguarde.style.height = "50px";							
					aguarde.innerHTML = "<div class='spinner-border text-success' role='status'>"+
					"<span class='sr-only'>RecicladArte...</span>"+
					"</div>";
				break;	
			}
		break;
	}	
}
selecionando_Emprestimo();
conta_Digital_Acesso_E_Cadastro();