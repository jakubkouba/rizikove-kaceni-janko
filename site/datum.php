<?
$dny["Mon"] = "Pondìlí";
$dny["Tue"] = "Úterý";
$dny["Wed"] = "Støeda";
$dny["Thu"] = "Ètvrtek"; 
$dny["Fri"] = "Pátek"; 
$dny["Sat"] = "Sobota";
$dny["Sun"] = "Nedìle";

$mesice = array(1=>"ledna", "února", "bøezna",
"dubna", "kvìtna", "èervna",
"èervence", "srpna", "záøí",
"øíjna", "listopadu", "prosince");

$dnes = $dny[Date("D")] . Date(" d. ") . 
$mesice[(int)Date("m")] . Date(" Y - H:i:s");

echo $dnes;
?>


