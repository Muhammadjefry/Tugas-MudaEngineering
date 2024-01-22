<?php


function Text($input)
{
    $text = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

    $elementReplace = "!";

    $output = str_replace($text, $elementReplace, $input);

    return $output;
}

// Test the function
echo Text("Cicak didinding");
