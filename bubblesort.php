<!DOCTYPE html>
<html>
<body>

<?php
class Digits {
	public $integers = [];
    public $temp;
    public $median;
    public $largest;

  function __construct($integers) {
    $this->$integers = $this->bubbleSort($integers);
    $this->getMedian($this->$integers);
    $this->getLargest($this->$integers);
  }
  
  function bubbleSort(array $integers) {
    $arrCount = count($integers);
    for($z=1;$z<$arrCount;$z++) {
      for($i=0;$i<$arrCount-$z;$i++) {
          if ($integers[$i] > $integers[$i+1]) {
              $temp = $integers[$i];
              $integers[$i] = $integers[$i+1];
              $integers[$i+1] = $temp;
          }   
      }
   	}
    print_r($integers);
    return $integers;
  }
  
  function getMedian(array $integers) {
  	$temp = floor(count($integers)/2);
    
    if(is_int(count($integers)/2)) {
    	$median = ($integers[$temp-1] + $integers[$temp])/2;
    	echo "<br>The median is $median";
    } else
    	echo  "<br>The median is $integers[$temp]";
  }
  
  function getLargest(array $integers) {
  	$largest = $integers[count($integers)-1];
    echo "<br>The largest number is $largest";
  }
}

class Integers extends Digits{
}

$arr = [15, 12, 10, 5, 42, 24, 7, 1, 0, 27];
$sample = new Integers($arr);


?>
 
</body>
</html>