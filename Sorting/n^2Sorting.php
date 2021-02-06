<?php 
	class SortingAlgorithms{
		private $arr ;
		public function __construct ($arr){
			$this->arr = $arr;
		}
		public function insertionSort(){
			for($i=1;$i<sizeof($this->arr);$i++){
				$key = $this->arr[$i];
				$j = $i - 1;
				while($j >= 0 && $this->arr[$j] > $key){
					$this->arr[$j+1] = $this->arr[$j];
					$j--;
				}
				$this->arr[$j+1] = $key;
			}
		}
		public function Swap(&$x,&$y){
			$Tmp = $x ; 
			$x   = $y;
			$y   = $Tmp; 
		} 
		public function SelectionSort(){
			for($i=0;$i<sizeof($this->arr);$i++){
				$low = $i;
				for($j=$i+1;$j<sizeof($this->arr);$j++){
					if($this->arr[$j] < $this->arr[$low]){
						$this->Swap($this->arr[$j] , $this->arr[$low]);
					}
				}
				if($this->arr[$i] > $this->arr[$low]){
					Swap($this->arr[$i] , $this->arr[$low]);
				}
			}
		}
		public function displayArray(){
			for($i=0;$i<sizeof($this->arr);$i++){
				echo $this->arr[$i]." ";
			}
		}
	}
	$arr = array(12,10,3,7,9,2);
	$object = new SortingAlgorithms($arr);
	$object->SelectionSort();
	$object->displayArray();
?>