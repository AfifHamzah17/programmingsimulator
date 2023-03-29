<?php
/**
 * This code can be run on server side to execute PHP code from the interactive editor.
 * 
 * !!!  WARNING !!!
 * This script allows the execution of arbitrary PHP code. Attackers could use it to compromise your servers. Only
 * upload and run this script in specially protected server enviroments.
 * 
 * Without this special knowledge to protect your server, feel free to use our endpoint: 
 * 
 * @author: Nils Reimers, www.php-einfach.de
 */
set_error_handler(function($_errno, $errstr){
	// $errmsg = substr($e, 0, 15);
	// echo $errmsg;

	// if(str_contains($errmsg, 'ParseError')){
	// 	echo  "Possible Cause: <b>Syntax Error</b></br> 1. There should be a variable mistake in your syntax right after PHP tag, since it is not identified previously";
	// }
	switch ($_errno){
		case 1:
			throw new ParseError("[ParseERROR]: " . $errstr);
			break;
		case 2:
			throw new Error("[WARNING]: " . $errstr);
			break;
		case 3:
			throw new Error("[FATAL]: " . $errstr);
			break;
		case 4:
			throw new Error("[NOTICE]: " . $errstr);
			break;
	}
	throw new Error($errstr);
});

try{
session_start();
$code = $_POST['phpeinfach_code_compile'];
header("Access-Control-Allow-Origin: *");
ob_start();

	eval(' ?>'.$code);
	$output = ob_get_contents();
	ob_end_clean();

	if(strlen($output) > 512*1024) {
		echo "<strong>Error</strong> - Output exceeded the limit. The first 1024 characters were:<br />";
		echo substr($output, 0, 1024);
		die();
	} else {
		echo $output;
	}
}catch(ParseError $e){
	echo "[PARSE ERROR]: " . $e;
	echo "<br/><br/>Probable Cause: <br/> 1. There is unclosed syntax, please check every bracket and semicolon in your syntax";

	$handle = fopen("dataset-error.csv", "a");
	fputcsv($handle, array($e));
	fclose($handle);

	$input= $e;
	$command = escapeshellcmd('classify.py '.$input);
	$output = exec($command);
	echo $output;
}catch(Error $e){
	echo "[NOTICE ERROR]: " . $e;
	echo "<br/><br/>Probable Cause: <br/> 1. There is a undefined variable syntax, please define every variable before you use it";

	$handle = fopen("dataset-error.csv", "a");
	fputcsv($handle, array($e));
	fclose($handle);

	$input= $e;
	$command = escapeshellcmd('classify.py '.$input);
	$output = exec($command);
	echo $output;
}catch(ErrorException $e){
	echo "[FATAL ERROR]: " . $e;
	echo "<br/><br/>Probable Cause: <br/> 1. There is a variable mistake in your syntax, the structure is good but please check again the typo";

	$handle = fopen("dataset-error.csv", "a");
	fputcsv($handle, array($e));
	fclose($handle);

	$input= $e;
	$command = escapeshellcmd('classify.py '.$input);
	$output = exec($command);
	echo $output;
}
