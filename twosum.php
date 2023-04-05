<!-- 1. twoSum (leetcode)
    solve this problem using nested loop and return answer in new array -->
<?php
class Solution {
function twoSum($nums, $target) {
$n;
$a=0;
$res[]= Array();;
$n=count($nums);
for($i=0;$i<$n;$i++)
{
    for($j=$i+1;$j<$n;$j++)
    {
        $a=$nums[$i]+$nums[$j];
        if($a==$target)
        {
            $res[0]=$i;
            $res[1]=$j;
            return  $res;
        }
    }
}
return $res;
    
}
}
$a=new Solution();
$num=array(1,2,3,4,5);
$target=9;
print_r($a->twoSum($num,$target));
?>