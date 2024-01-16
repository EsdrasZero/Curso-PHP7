<?PHP
//IMPUT_GET pega o valor do cep que foi digitado na url exps cep=00000-000
$cep = filter_input(INPUT_GET, "cep");
$cep = str_replace("-", "", $cep);

//API antiga do correio descontuinada
$str = file_get_contents('http://correiosapi.apphb.com/cep/'. $cep);

$arrCidade = json_decode($str);

if($arrCidade!= null){
    echo "<p><b>CEP: </b> ". $arrCidade->cep ."</p>";
    echo "<p><b>Tipo de Logradouro: </b> ". $arrCidade->tipoDeLogradouro ."</p>";
    echo "<p><b>Logradouro: </b> ". $arrCidade->logradouro ."</p>";
    echo "<p><b>Bairro: </b> ". $arrCidade->bairro ."</p>";
    echo "<p><b>Cidade: </b> ". $arrCidade->cidade ."</p>";
    echo "<p><b>Estado: </b> ". $arrCidade->estado ."</p>";
}
?>