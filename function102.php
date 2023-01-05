<?php
    function multiple($a,$b){
        $sum = $a * $b;
        print("sum =".$sum. "<br />");
    }
    multiple(10,20);

    function add($a,$b,$c,$d){
        return array($a,$b,$c,$d);

        
    }
    //$sum = add(100,200);
    //print("sum =".$sum[0]$sum[1]);
    list($a,$b,$c,$d) = add(100,200,300,"Sum =");
    print("Sum =".($a+$b+$c));
?>