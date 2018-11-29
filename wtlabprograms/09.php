<?php
$states="Mississippi Alabama Texas Massachusetts kansas";
$statesArray=array();
$states1=explode(' ',$states);
echo "Original Array: <br>";
foreach($states1 as $i=>$value)
	print("STATES[$i]=$value<br>");

foreach($states1 as $state){
	if(preg_match('/xas$/',($state)))
		$stateArray[0]=($state);
}

foreach($states1 as $state){
	if(preg_match('/^k.*s$/i',($state)))
		$stateArray[1]=($state);
}

foreach($states1 as $state){
	if(preg_match('/^M.*s$/',($state)))
		$stateArray[2]=($state);
}		

foreach($states1 as $state){
	if(preg_match('/a$/',($state)))
		$stateArray[3]=($state);
}

echo "<br><br>Resultant Array: <br>";
foreach($stateArray as $i=>$value)
	print("STATES[$i]=$value<br>");
	
?>
