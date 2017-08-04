<?php
require_once"../class/CEP/CorreioService.php";
require_once"../class/CEP/BuscaViaCEPJSON.php";

function XML2Array($xmlContent, $out = array()){
    $xmlObject = is_object($xmlContent) ? $xmlContent : simplexml_load_string($xmlContent);
    foreach((array) $xmlObject as $index => $node)
        $out[$index] = ( is_object($node) || is_array($node) ) ? XML2Array( $node ) : $node;
    return $out;
}

/**
* Search for the name of street 
*/
if(!empty($_POST['cep']) && !empty($_POST['we_cep']) && $_POST['sec'] == 48656){
	if(strlen($_POST['cep']) != 8){
		print_r("Erro ao buscar, digite o seu CEP corretamente.");
	} else {
		$cep = new BuscaViaCEPJSON;
		$cep = $cep->retornaCEP($_POST['cep']);
		if($cep['logradouro'] == ""){
			print_r("Erro ao buscar, digite o seu CEP corretamente.");
		} else
			print_r($cep['logradouro']. ", " . $cep['localidade']. " - ". $cep['uf']);
	}	
}

/**
* Calc the price 
*/
if(!empty($_POST['cep']) && !empty($_POST['we_cep']) && $_POST['sec'] == 4861){
	if(strlen($_POST['cep']) != 8){
		print_r("00,00");
	} else {
		$_args = array( 
		 'nCdServico' => ServicosCorreios::SEDEX,
		 'sCepOrigem'=>$_POST['we_cep'], 'sCepDestino' => $_POST['cep'], 
		 'nVlPeso' => '1', 'nVlComprimento' => 16, 
		 'nVlAltura' => 11, 'nVlLargura' => 11  );
		# solicitando calculo
		
		$calculafrete = new CalculaFrete( $_args );
		$rec = XML2Array($calculafrete->request());
		print_r($rec['Valor']);
	}
}
?>