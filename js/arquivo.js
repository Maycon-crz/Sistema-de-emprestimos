function emprestimoConsignado(){
	alert("Chamou funcao consignado");
}
function emprestimoAutomatico(){
	alert("Chamou funcao automatico");
}
function selecionandoEmprestimo(){
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
selecionandoEmprestimo();