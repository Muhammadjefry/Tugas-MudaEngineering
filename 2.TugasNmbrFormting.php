<?php


function formatNumber(...$numbers)
{
    $formatNo = "";
    $jmlhNo = 0;

    foreach ($numbers as $digit) {
        if (is_numeric($digit)) {
            $formatNo .= $digit;
            $jmlhNo++;
        }
    }

    echo "Format Number : " . "(" . substr($formatNo, 0, 3) . ") " . substr($formatNo, 3, 3) . "-" . substr($formatNo, 6);
}

// Test the function
formatNumber(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
