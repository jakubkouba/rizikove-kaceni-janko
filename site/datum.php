<?
$dny["Mon"] = "Pond�l�";
$dny["Tue"] = "�ter�";
$dny["Wed"] = "St�eda";
$dny["Thu"] = "�tvrtek"; 
$dny["Fri"] = "P�tek"; 
$dny["Sat"] = "Sobota";
$dny["Sun"] = "Ned�le";

$mesice = array(1=>"ledna", "�nora", "b�ezna",
"dubna", "kv�tna", "�ervna",
"�ervence", "srpna", "z���",
"��jna", "listopadu", "prosince");

$dnes = $dny[Date("D")] . Date(" d. ") . 
$mesice[(int)Date("m")] . Date(" Y - H:i:s");

echo $dnes;
?>


