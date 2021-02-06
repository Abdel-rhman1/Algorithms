<?php 
	class finb{
		public function usingRecursion($number){
			if($number <= 1) return $number;
			return  ($this->suingRecursion($number-1) + $this->suingRecursion($number-2));

		}
		public function usingDynamicProgrammin($number){
			$fib = array();
			$fib[0] = 0;
			$fib[1] = 1;
			for($i=2;$i<=$number;$i++){
				$fib[$i] = $fib[$i-1] + $fib[$i-2] ;
			}
			return $fib[$number];
		}
		public function usingMatrix($number){
			$first  = array( array(1,1) , array(1,0));
			$second = array( array(1,1) , array(1,0));
			if ($number == 0)
        		return 0;
        	for ($i = 2; $i < $number; $i++){
        		$x = $first[0][0] * $second[0][0] + 
				     $first[0][1] * $second[1][0];
				$y = $first[0][0] * $second[0][1] + 
				     $first[0][1] * $second[1][1];
				$z = $first[1][0] * $second[0][0] + 
				     $first[1][1] * $second[1][0];
				$w = $first[1][0] * $second[0][1] +
				     $first[1][1] * $second[1][1];				 
					$first[0][0] = $x;
					$first[0][1] = $y;
					$first[1][0] = $z;
					$first[1][1] = $w;
        	}
        	return $first[0][0];
		}
	}
	$object = new finb();
	echo $object->suingRecursion(9)."<br/>";
	echo "Dynamic Programming"."<br/>";
	echo $object->suingDynamicProgrammin(9)."<br/>";
	echo "Matrix maltiplication"."<br/>";
	echo $object->usingMatrix(9)."<br/>";
?>