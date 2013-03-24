<?php
	$data = [1,2,3,4,5,7,8,9,10];
	function finder($data, $index){
		if($index < count($data)-1){
			if($data[$index] != ($data[$index+1]-1)){
				return($data[$index]+1);
			}else{
				return finder($data, $index+1);
			}
		}else{
			return ('not found');
		}
	};
	$retVal = finder($data, 0);
	echo($retVal);
?>
