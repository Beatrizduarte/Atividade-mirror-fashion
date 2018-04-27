function numeroParaReal(numero){var formatado = "R$"+ numero.toFixed(2).replace(".",",");return formatado;
}

function realParaNumero(texto){var compativelComParseFloat = texto.replace("R$ ","");compativelComParseFloat = compativelComParseFloat.replace(",",".");
var valor = parseFloat(compativelComParseFloat);return valor;
}




