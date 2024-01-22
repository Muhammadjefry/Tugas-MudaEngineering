<?php
function Repeat($inputString)
{
    $outputString = "";

    for ($i = 0; $i < strlen($inputString); $i++) {
        $outputString .= $inputString[$i] . $inputString[$i];
    }

    return $outputString;
}


echo Repeat("Hai Sayank..!!");
