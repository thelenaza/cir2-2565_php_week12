<?php
$anony = function(){
    return"lambda";
};
print(get_class($anony));
print("<br />")
print(gettype($anony));
?>