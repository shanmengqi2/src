<?php
echo "<h1>hello world this is test</h1>";
//phpinfo();

test();


function test(){
    static $num1 = 2;
    $num1++;
}

$d = date("D");
echo $d;
$ds = $d.'abc'.'cba';
echo $ds;
?>