<?php
// 7.Reverse integer (leet codoe)
  //  it using to while loop and if statement 


class Solution 
{
    function reverse($x) 
    {
       $rev =0;
        while ((int)$x!=0)  
        {  
            $rem = $x % 10;  
            $rev = ($rev * 10) + $rem;  
            $x = ($x/ 10);   
        }
        if($rev>2147483647 || $rev<-2147483648)
        {
            return 0;
        }
    
    return $rev; 
    }
}
$obj=new Solution();
$x=123;
echo $obj->reverse($x);

?>