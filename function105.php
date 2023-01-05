<?php
    $closure = function($name){
        return array ($name,$age);
    };
    print(get_dlass($closure));
    print("<br />");
    
   [ $name,$age] = $closure("sehun",28);
    print($name." ".$age);
?>