<?php
    //function hiHello
    $message = "Hello!";
    $age = 28;
    $hi = function($name)use($message,$age){
        return array($message,$name,$age);
    };
        
  
    //$msg = $hi ("sehun");
    //print($msg);
    [$message,$name,$age]= $hi("sehun");
    print($message. $name.", Age :$age");
?>