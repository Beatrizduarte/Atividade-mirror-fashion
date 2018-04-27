var $input_quantidade = document.querySelector("#qt");
var $output_total = document.querySelector("#total");

$input_quantidade.oninput = calcularEMostrarTotal;

function calcularEMostrarTotal(){
	var quantidade = $input_quantidade.value;

	var valorUnitarioTexto = document.querySelector("#preco").textContent;
	var varlorUnitarioNumero = realParaNumero(valorUnitarioTexto);

		var total = numeroParaReal(quantidade * varlorUnitarioNumero);

	$output_total.value = total; 
}