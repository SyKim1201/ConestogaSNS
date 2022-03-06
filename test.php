<?php
$x = 10;
$y = 20;
function Detail() {
    global $x;
    $x += 20;
    $y = $x + 10;
    print("Value of x=".$x);
    print("value of y=".$y);
}

print("Value of x=".$x);
print("Value of y=".$y);
Detail();
?>