<?php

function capMe(...$names)
{
    $firstUpeercase = array_map('ucfirst', $names);

    return $firstUpeercase;
}


print_r(capMe("jojo", "jeje", "jiji"));
