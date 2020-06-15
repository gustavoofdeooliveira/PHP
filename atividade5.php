<?php
//Atividade 5)A)
$data = date('d-m-Y');
echo "Data: ".$data;
/*Resultado: Data: 15-06-2020*/
?><br><br>

<?php
//B
$jan1 = mktime(0,0,01,31,2014);
$jan1_30 = mktime(0,30,0,1,31,2014);
$dif = $jan1_30 - $jan1;
echo $dif;
/*Resultado: -439428601*/
?><br><br>

<?php
//C
$msg = "Olá, mundo!";;
echo lcfirst($msg)."<br>";
echo ucfirst($msg)."<br>";
echo ucwords($msg)."<br>";
echo strtolower($msg)."<br>";
echo strtoupper($msg)."<br>";
/*Resultado: olá, mundo!
             Olá, mundo!
             Olá, Mundo!
             olá, mundo!
             OLá, MUNDO!*/
?><br><br>

<?php
//D
$msg = "   Cheio  de  espaços   ";
echo ltrim($msg)."<br>";
echo rtrim($msg)."<br>";
echo trim($msg)."<br>";
/*Resultado: Cheio de espaços
             Cheio de espaços
             Cheio de espaços*/
?><br><br>

<?php
//E
$busca = "nome";
$troca = "Marinalva";
$frase = "E ai, nome!";
$msg = str_replace($busca, $troca, $frase);
echo $msg;
/*Resultado: E ai, Marinalva!*/
?><br><br>

<?php
//F
$msg = "Oi, como foi seu dia?";
echo strlen($msg) ."<br>";
echo substr_count($msg, 'oi');
/*Resultado: 21
             1*/
?><br><br>

<?php
//G
$msg = "abcdefghijklmnopqrstuvwxyz";
echo substr($msg, 0, 1) ."<br>";
echo substr($msg, 3, 5) ."<br>";
echo substr($msg, 10, -2) ."<br>";
echo substr($msg, strlen($msg) -2, 1);
/*Resultado: a
             defgh
             klmnopqrstuvwx
             y*/
?><br><br>

