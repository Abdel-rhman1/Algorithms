<?php 
	function getaMax(&$arr,$n):int{
		$max = $arr[0];
		for($i=1;$i<$n;$i++){
			if($arr[$i]>$max)
				$max = $arr[$i];
		}
		return $max;
	} 
	function countSort(&$arr,$n,$exp){
		$output= array_fill(0,$n,0);;
		$count = array_fill(0,10,0);
		for($i=0;$i<$n;$i++){
			$count[($arr[$i] / $exp) %10]++;
		}
		for($i=1;$i<10;$i++){
			$count[$i]+=$count[$i-1];
		}
		for($i=$n-1;$i>=0;$i--){
			$output[$count[($arr[$i] /$exp)%10]-1] =$arr[$i];
			$count[($arr[$i]/$exp)%10]--;
		}
		for($i=0;$i<$n;$i++){
			$arr[$i] = $output[$i]; 
		}
	}
	function radixsort(&$arr,$n){
		$m = getaMax($arr,$n);
		for($exp=1;$m / $exp >0;$exp*=10){
			countSort($arr,$n,$exp);
		}
	}
	function printArray(&$arr,$n){
		for($i=0;$i<$n;$i++){
			echo $arr[$i]." ";
		}
		echo "<br/>";
	}
	$arr =array(170, 45, 75, 90, 802, 24, 2, 66);
	$n =count($arr);
	radixsort($arr,$n);
	printArray($arr,$n);

?>