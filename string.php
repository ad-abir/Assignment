<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {

    $count = 0;
    $str_rev = strrev($string);

    for ($i = 0; $i < strlen($string); $i++) {

        if (
            $string[$i] === 'a' || $string[$i] === 'e' || $string[$i] === 'i' || $string[$i] === 'o' || $string[$i] === 'u' ||
            $string[$i] === 'A' || $string[$i] === 'E' || $string[$i] === 'I' || $string[$i] === 'O' || $string[$i] === 'U'
        ) {
            $count++;
        }
    }

    echo "Original String: $string, Vowel Count: $count, Reversed String: $str_rev\n";
}
