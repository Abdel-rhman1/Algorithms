<?php 
	function countSort($arr){
		$max = max($arr);
		$min = min($arr);
		$count = array($max - $min+1);
		$output = array(count($arr));
		$count = array_fill(0,$max - $min +1, 0);
		for($i=0;$i<count($arr);$i++){
			$count[$arr[$i]-$min]++;
		}
		for($i=1;$i<count($count);$i++){
			$count[$i] = $count[$i] + $count[$i-1];
		}
		for($i=0;$i<count($arr)-1;$i++){
			$output[$count[$arr[$i]-$min]-1]=$arr[$i];
			$count[$arr[$i]-$min]--;
		}
		for($i=0;$i<count($output);$i++){
			echo $output[$i]."  ";
		}
	}
	$arr = array(100, 23, 90, 45, 89, 90, 32, 10);
	countSort($arr);
?>
