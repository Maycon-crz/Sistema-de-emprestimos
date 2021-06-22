<?php require_once("include/cabecalho.php"); ?>
	<div class='container border rounded'>
		<div class='row linhasEmprestimos'>
			<div class='col-12'>
				<h1 class='text-center text-secondary border rounded mt-3 p-3'>Conheça as opções de empréstimos pessoais:</h1>
			</div>			
		</div>
		<div class='row linhasEmprestimos'>
			<div class='col-1'>&nbsp;</div>
			<div class='col-5 text-center border rounded opcoesDeEmprestimos' id='automatico'>
				<h1 class='text-secondary'>Empréstimo Automático</h1>				
				<img src='img/automatico.jpg' class='form-control p-0' />
			</div>		
			<div class='col-5 text-center border rounded opcoesDeEmprestimos' id='consignado'>
				<h1 class='text-secondary'>Empréstimo Consignado</h1>
				<img src='img/consignado.jpg' class='form-control p-0' />
			</div>
			<div class='col-1'>&nbsp;</div>
		</div>
		<div class='row' id='linhaDinamicaDeEmprestimos'></div>
		<div class='row pt-2'>
			<div class='col-1'>&nbsp;</div>
			<div class='col-10 text-center border rounded opcoesDeEmprestimos'>
				<h1 class='text-secondary m-5'>
					Simulação de Empréstimo
					<img src='img/simulacao.jpg' class='border rounded-pill'/>
				</h1>
			</div>
			<div class='col-1'>&nbsp;</div>
		</div>
	</div>
<?php require_once("include/rodape.php"); ?>