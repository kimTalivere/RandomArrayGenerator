<?php

namespace App;

// Class responsible for encoding strings and arrays using the ROT13 cipher
class Rot13Encoder {
    // Method to encode a single string using ROT13
    public function encodeString($string) {
        return str_rot13($string); // Use PHP's built-in str_rot13 function to encode the string
    }

    // Method to encode an array of strings using ROT13
    public function encodeArray(array $array) {
        // Use array_map to apply the encodeString method to each element in the array
        return array_map([$this, 'encodeString'], $array);
    }
}
