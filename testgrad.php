<?php
//$a = -5; $b = 0;
$score = 70;
if ($score >= 0 && $score < 50) {
    $grad = "F";
}
else if ($score >= 50 && $score < 60) {
    $grad = "D";
}
else if ( $score >= 60 && $score < 70 ) {
    $grad= "C";
}
else if ( $score >= 70 && $score < 80) {
    $grad = "B";
}
else if ( $score >= 80 && $score <= 100) {
    $grad = "A";
}
echo "Your Score is ".$score." <br>";
echo "You Grad is ".$grad."";
?>
