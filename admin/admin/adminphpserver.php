<?php
 $server = 'localhost';
 $serverusername = 'root';
 $serverpassword = '';
 $dbname = 'project';

 $connect = new mysqli($server, $serverusername, $serverpassword, $dbname);
   if ($connect->connect_error) {
      die("Connection Fail".$connect->connect_error);
   }



if(!isset($_SESSION)) session_start(); 

$filetxt = 'userson.txt';
$timeon = 120; 
$sep = '^^'; 
$vst_id = '-vst-'; 




$uvon = isset($_SESSION['username']) ? $_SESSION['username'] : $_SERVER['SERVER_ADDR']. $vst_id;

$rgxvst = '/^([0-9\.]*)'. $vst_id. '/i'; 
$nrvst = 0; 


$addrow[] = $uvon. $sep. time();


if(is_writable($filetxt)) {
 
 $ar_rows = file($filetxt, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
 $nrrows = count($ar_rows);

 
 if($nrrows>0) {
 for($i=0; $i<$nrrows; $i++) {
 
 $ar_line = explode($sep, $ar_rows[$i]);

 
 if($ar_line[0]!=$uvon && (intval($ar_line[1])+$timeon)>=time()) {
 $addrow[] = $ar_rows[$i];
 }
 }
 }
}

$nruvon = count($addrow); 
$usron = ''; 

for($i=0; $i<$nruvon; $i++) {
 if(preg_match($rgxvst, $addrow[$i])) $nrvst++; 
 else {
 
 $ar_usron = explode($sep, $addrow[$i]);
 $usron .= '<br/> - <i>'. $ar_usron[0]. '</i>';
 }
}
$nrusr = $nruvon - $nrvst; 


$reout = '<div id="uvon"><h4>Online: '. $nruvon. '</h4>Visitors: '. $nrvst. '<br/>Users: '. $nrusr. $usron. '</div>';


if(!file_put_contents($filetxt, implode("\n", $addrow))) $reout = 'Error: Recording file not exists, or is not writable';




?>