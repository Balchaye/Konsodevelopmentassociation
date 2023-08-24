<?php

    // original string
    $OriginalString = "+ C D 2 5";
	$values = "5 2";
	$value = 0;
	$ops = explode(" ", readline($OriginalString));
    if(explode(" ",$OriginalString,-2));
	{
	$value = explode(" ",$values);
     echo array_sum($value);	
	}
	
?>
				<?php
				class Solution {
					  function calPoints($pos)
					{
					$pos = explode(" ", readline());
					//input 
					$solution = new Solution();
					//solution 
					$output = $solution->calPoints($pos);
					
					echo $output;
					echo "hello balcha bekele how are you";
						
					} 
						
				}
				?>
<?php 
class Solution1 {

    /**
     * @param String[] $operations
     * @return Integer
     */
     function calPoints($pos) {
        
		$sumArr=[];
		$count=0;
		foreach($pos as $value){
			if(is_numeric($value))
            {
                $sumArr[$count]= $value; // 5+10+15
            }
            else if($value=='+'){
			$sumArr[$count]=$sumArr[$count-1]+$sumArr[$count-2]; //[5 10 15]
			}else if ($value =='D'){
				//$count=count($sumArr);
				$sumArr[$count]=2*$sumArr[$count-1]; //[5 10]
			}else {
                --$count; //[5 2]
                unset($sumArr[$count]);
                --$count;//[5]
            }
            ++$count;//[5 2]
		}
		return array_sum($sumArr);//30
		
	}
    }
?>