<?php 
//sha1
$sha1_resultado = sha1("Olá, mundo");
echo $sha1_resultado;
echo " sha1 <br>";

//md5
$md5_resultado = md5("PHP intermediário");
echo $md5_resultado;
echo " md5 <br>";

//base64_encoder
$base64_resultado = base64_encode("criptografias");
echo $base64_resultado;

echo " encoder <br>";
//base64_decoder
$base64_decodificado = base64_decode($base64_resultado);
echo $base64_decodificado;

?>