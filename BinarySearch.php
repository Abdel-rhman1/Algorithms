<?php 
	function binarySeach($arr , int $l ,int $r , int $x):int{
		if($r >= $l){
			 $mid = ceil($l + ($r - $l) / 2);
			if($x==$arr[$mid]){
				return floor($mid);
			}if($arr[$mid] > $x){
				return binarySeach($arr,$l,$mid-1,$x);
			}if($arr[$mid]<$x){
				return binarySeach($arr,$mid+1,$r,$x);
			}
		}
		return -1;
	}
	function poweringNumber(int $n,int $power):int{
		$res=1;
		for($i=0;$i<floor($power/2);$i++){
			$res*=$n;
		}
		if($power%2==0) return $res * $res;
		return  $res * $res * $n;
	}
	function fibUsingmatrix(int $n){
		
	}
	$arr = array(12,10,3,7,9,2);
	sort($arr);
	echo binarySeach($arr,0,count($arr)-1,7);
	echo poweringNumber(4,4);

?>