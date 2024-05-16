<?php

$strings = ["Hello", "World", "PHP", "Programming"];

function processStrings($string)
{
    $vowelCount = 0;
    $vowels = array("a", "e", "i", "o", "u");

    foreach (str_split($string) as $char) {
        if (in_array(strtolower($char), $vowels)) {
            $vowelCount++;
        }
    }

    $reversedString = strrev($string);

    return array(
        "originalString" => $string,
        "vowelCount" => $vowelCount,
        "reversedString" => $reversedString
    );
}



foreach ($strings as $string) {
    $processedString = processStrings($string);


    if (php_sapi_name() === 'cli') {
        echo "Original String: " . $processedString["originalString"] . ", Vowel Count: " . $processedString["vowelCount"] . ", Reversed String: " . $processedString["reversedString"] . "\n";
    } else {
        echo "Original String: " . $processedString["originalString"] . ", Vowel Count: " . $processedString["vowelCount"] . ", Reversed String: " . $processedString["reversedString"] . "<br>";
    }


}
