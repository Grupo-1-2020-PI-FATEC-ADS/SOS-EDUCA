//	Variável que receberá o objeto XMLHttpRequest
var req;

function validarDados(campo, valor) {

	// Verificar o Browser
	// Firefox, Google Chrorme, Safari e outros
	if(window.XMLHttpRequest) {
		req	= new XMLHttpRequest();
	}
	// Internet Explorer
	else if(window.ActiveXObject) {
		req = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	// Aqui vão os valores, caso haja mais de um, e o nome do campo que pediu a requisição.
	var url = "ajax/validacao.php?campo="+campo+"&valor="+valor;
	
	// Chamada do método open para processar a requisição
	req.open("Get", url, true); 
    // Quando o objeto recebe o retorno, chamamos a função callback();
	req.onreadystatechange = function() {
		
		// Exibindo mensagem de carregar
		if(req.readyState == 1) {
			document.getElementById('campo_' + campo + '').innerHTML = '<font color="gray">Verificando...</font>';
		}
	
		// Verifica se o Ajax realizou todas as operações corretamente (essencial)
		if(req.readyState == 4 && req.status == 200) {
	        // Resposta retornada pelo executor.php
			var resposta = req.responseText;
			
			// Abaixo colocamos a resposta na div do campo que fez a requisição
			document.getElementById('campo_'+ campo +'').innerHTML = resposta;
		}
	
	}
	
	req.send(null);
	
}