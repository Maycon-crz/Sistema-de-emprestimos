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
				<h3 class='text-secondary'>Empréstimo Automático</h3>
				<img src='img/automatico.jpg' class='form-control p-0' />
			</div>		
			<div class='col-5 text-center border rounded opcoesDeEmprestimos' id='consignado'>
				<h3 class='text-secondary'>Empréstimo Consignado</h3>
				<img src='img/consignado.jpg' class='form-control p-0' />
			</div>
			<div class='col-1'>&nbsp;</div>
		</div>
		<div class='row mt-3'>
			<div class='col-1'>&nbsp;</div>
			<div class='col-10 p-0 border text-center' id='linhaDinamicaDeEmprestimos'></div>
			<div class='col-1'>&nbsp;</div>
		</div>
		<div class='text-center' id='linhaDeParcelasParaEmprestimo'>			
			<div class='row'>
				<div class='col-1'>&nbsp;</div>
				<div class='col-5 border'>
					<h2 class='text-success border border-info'>R$ 3.000</h2>
					<h5 class='text-secondary border border-info'>Parcelas:</h5>
					<h6 class='border m-0'>12 X 266,21</h6>
					<h6 class='border m-0'>24 X 140,88</h6>
					<h6 class='border m-0'>36 X 99,30</h6>
					<h6 class='border m-0'>48 X 78,69</h6>
					<h6 class='border m-0'>60 X 66,37</h6>                        
				</div>				
				<div class='col-5 border'>
					<h2 class='text-success border border-info'>R$ 4.000</h2>
					<h5 class='text-secondary border border-info'>Parcelas:</h5>
					<h6 class='border m-0'>12 X 354,95</h6>
					<h6 class='border m-0'>24 X 187,85</h6>
					<h6 class='border m-0'>36 X 132,40</h6>
					<h6 class='border m-0'>48 X 104,86</h6>
					<h6 class='border m-0'>60 X 88,49</h6>                                
				</div>
				<div class='col-1'>&nbsp;</div>
			</div><div class='row'>
				<div class='col-1'>&nbsp;</div>
				<div class='col-5 border'>
					<h2 class='text-success border border-info'>R$ 5.000</h2>
					<h5 class='text-secondary border border-info'>Parcelas:</h5>
	                <h6 class='border m-0'>12 X 443,6</h6>
	                <h6 class='border m-0'>24 X 234,8</h6>
	                <h6 class='border m-0'>36 X 165,5</h6>
	                <h6 class='border m-0'>48 X 131,08</h6>
	                <h6 class='border m-0'>60 X 110,6</h6>                        
				</div>				
				<div class='col-5 border'>
					<h2 class='text-success border border-info'>R$ 6.000</h2>
					<h5 class='text-secondary border border-info'>Parcelas:</h5>
	                <h6 class='border m-0'>12 X 532,42</h6>
	                <h6 class='border m-0'>24 X 281,77</h6>
	                <h6 class='border m-0'>36 X 198,60</h6>
	                <h6 class='border m-0'>48 X 157,30</h6>
	                <h6 class='border m-0'>60 X 132,74</h6>                        
				</div>
				<div class='col-1'>&nbsp;</div>
			</div><div class='row'>
				<div class='col-1'>&nbsp;</div>
				<div class='col-5 border'>
					<h2 class='text-success border border-info'>R$ 7.000</h2>
					<h5 class='text-secondary border border-info'>Parcelas:</h5>
	                <h6 class='border m-0'>12 X 621,16</h6>
	                <h6 class='border m-0'>24 X 328,73</h6>
	                <h6 class='border m-0'>36 X 231,70</h6>
	                <h6 class='border m-0'>48 X 183,51</h6>
	                <h6 class='border m-0'>60 X 154,86</h6>                        
				</div>				
				<div class='col-5 border'>
					<h2 class='text-success border border-info'>R$ 8.000</h2>
					<h5 class='text-secondary border border-info'>Parcelas:</h5>
	                <h6 class='border m-0'>12 X 709,89</h6>
	                <h6 class='border m-0'>24 X 375,69</h6>
	                <h6 class='border m-0'>36 X 264,80</h6>
	                <h6 class='border m-0'>48 X 209,73</h6>
	                <h6 class='border m-0'>60 X 176,99</h6>                        
				</div>
				<div class='col-1'>&nbsp;</div>
			</div><div class='row'>
				<div class='col-1'>&nbsp;</div>
				<div class='col-5 border'>
					<h2 class='text-success border border-info'>R$ 9.000</h2>
					<h5 class='text-secondary border border-info'>Parcelas:</h5>
	                <h6 class='border m-0'>12 X 798,63</h6>
	                <h6 class='border m-0'>24 X 422,65</h6>
	                <h6 class='border m-0'>36 X 297,90</h6>
	                <h6 class='border m-0'>46 X 235,95</h6>
	                <h6 class='border m-0'>60 X 199,11</h6>                        
				</div>				
				<div class='col-5 border'>
					<h2 class='text-success border border-info'>R$ 10.000</h2>
					<h5 class='text-secondary border border-info'>Parcelas:</h5>
	                <h6 class='border m-0'>12 X 887,37</h6>
	                <h6 class='border m-0'>24 X 469,61</h6>
	                <h6 class='border m-0'>36 X 331,00</h6>
	                <h6 class='border m-0'>48 X 262,16</h6>
	                <h6 class='border m-0'>60 X 154,86</h6>                        
				</div>
				<div class='col-1'>&nbsp;</div>
			</div><div class='row'>
				<div class='col-1'>&nbsp;</div>
				<div class='col-5 border'>
					<h2 class='text-success border border-info'>R$ 15.000</h2>
					<h5 class='text-secondary border border-info'>Parcelas:</h5>
	                <h6 class='border m-0'>12 X 1.331,05</h6>
	                <h6 class='border m-0'>24 X 704,42</h6>
	                <h6 class='border m-0'>36 X 496,50</h6>
	                <h6 class='border m-0'>48 X 383,24</h6>
	                <h6 class='border m-0'>60 X 331,85</h6>                        
				</div>				
				<div class='col-5 border'>
					<h2 class='text-success border border-info'>R$ 20.000</h2>
					<h5 class='text-secondary border border-info'>Parcelas:</h5>
	                <h6 class='border m-0'>12 X 1.774,73</h6>
	                <h6 class='border m-0'>24 X 939,23</h6>
	                <h6 class='border m-0'>36 X 662,00</h6>
	                <h6 class='border m-0'>48 X 524,32</h6>
	                <h6 class='border m-0'>60 X 442,47</h6>                        
				</div>
				<div class='col-1'>&nbsp;</div>
			</div><div class='row'>
				<div class='col-1'>&nbsp;</div>
				<div class='col-5 border'>
					<h2 class='text-success border border-info'>R$ 25.000</h2>
					<h5 class='text-secondary border border-info'>Parcelas:</h5>
	                <h6 class='border m-0'>12 X 2.218,41</h6>
	                <h6 class='border m-0'>24 X 1.174,04</h6>
	                <h6 class='border m-0'>36 X 827,49</h6>
	                <h6 class='border m-0'>48 X 655,40</h6>
	                <h6 class='border m-0'>60 X 553,08</h6>                        
				</div>				
				<div class='col-5 border'>
					<h2 class='text-success border border-info'>R$ 30.000</h2>
					<h5 class='text-secondary border border-info'>Parcelas:</h5>
	                <h6 class='border m-0'>12 X 2.662,33</h6>
	                <h6 class='border m-0'>24 X 1.408,82</h6>
	                <h6 class='border m-0'>36 X 992,60</h6>
	                <h6 class='border m-0'>48 X 786,50</h6>
	                <h6 class='border m-0'>60 X 663,85</h6>                        
				</div>
				<div class='col-1'>&nbsp;</div>
			</div>
		</div>		
		<div class='row pt-3'>
			<div class='col-1'>&nbsp;</div>
			<div class='col-10 border' id='linhaDeConfirmacaoDeEmprestimo'></div>
			<div class='col-1'>&nbsp;</div>
		</div>
		<div class='row pt-2'>
			<div class='col-1'>&nbsp;</div>
			<div class='col-10 text-center border rounded opcoesDeEmprestimos'>
				<h3 class='text-secondary m-5'>
					Simulação de Empréstimo
					<img src='img/simulacao.jpg' class='border rounded-pill'/>
				</h3>
			</div>
			<div class='col-1'>&nbsp;</div>
		</div>
		<div class='row pt-2'>
			<div class='col-1'>&nbsp;</div>
			<div class='col-10 text-center border rounded pt-3'>
				<label class='form-control text-secondary'>Eu preciso de:</label>
				<select class='form-select'>
					<option>R$ 3.000</option>
					<option>R$ 4.000</option>
					<option>R$ 5.000</option>
					<option>R$ 6.000</option>
					<option>R$ 7.000</option>
					<option>R$ 8.000</option>
					<option>R$ 9.000</option>
					<option>R$ 10.000</option>
					<option>R$ 15.000</option>
					<option>R$ 20.000</option>
					<option>R$ 25.000</option>
					<option>R$ 30.000</option>
				</select>
				<button type='button' class='form-control btn btn-lg btn-outline-primary mt-3'>Simular Empréstimo -></button>
			</div>
			<div class='col-1'>&nbsp;</div>
		</div>
	</div>
<?php require_once("include/rodape.php"); ?>