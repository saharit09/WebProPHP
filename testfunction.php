<?php
$x = 100;
$y = 10;
$operator = "+" ;

function plus()
{
    global $x,$y;
    echo "x + y = ",$x + $y,"<br>";
}
function sub()
{
    global $x,$y;
    echo "x - y = ",$x - $y,"<br>";
}
function mul()
{
    global $x,$y;
    echo "x * y = ",$x * $y,"<br>";
}
function div()
{
    global $x,$y;
    echo "x / y =",$x / $y," <br>";
}
plus();
sub();
mul();
div();
?>