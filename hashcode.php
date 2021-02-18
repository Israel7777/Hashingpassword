<?php
#1. Generate password / get password													
																
$password =chr(rand(65,90)).rand(1000,9999).chr(rand(65,90));
															
#2. Converting the password into hash ( ascii of the character )

$asckey=0;
for( $i = 1; $i < $count  ; $i++){
			$asckey = $asckey + (ord($password{$i})) ;
}

#3. Converting the second hash ( convert decimal to hexadecimal )
																 
$finalpass= (dechex($asckey));

#4. Adding third hash key ( Generating the random colour part )
																 
function random_color_part() {
		return str_pad(dechex(mt_rand(0,255)),2,'0',STR_PAD_LEFT);
}

#5. Store password															
																
if(strlen($finalpass)>2){
	$password = "#".$finalpass.rand(0,9).random_color_part()
}
if(strlen($finalpass)<3){
	$password = "#".$finalpass.random_color_part().random_color_part();
}
?>																




