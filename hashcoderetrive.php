<?php
#1. Fetch password and index from database

		{
			$index=$row[8];
			$pass=$row[3];
		}
		
#2. Get the hashing index 

		$check = substr($pass,1,$index);
		
#3. get the length of password 

		$count = strlen($password);
		
#4 . decyprt the password 

		 $asckey=0;
		 for( $i = 1; $i < $count  ; $i++)
		 {
			 $asckey = $asckey + (ord($password{$i})) ;
		 }

?>