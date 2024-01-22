<?php


function ABCmath($a, $b, $c)
{
    $hasil = $a * $b;
    if ($hasil % $c == 0) {
        echo "True";
    } else {
        echo "false";
    }
}
ABCmath(5, 2, 1);
