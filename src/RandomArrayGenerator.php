<?php

namespace App;

use App\RandomStringGenerator; // Import the RandomStringGenerator class

// Class responsible for generating an array of random strings
class RandomArrayGenerator {
    private $stringGenerator; // Instance of RandomStringGenerator for generating individual strings
    private int $size;            // Size of the array to be generated

    // Constructor that initializes the string generator and size
    public function __construct(RandomStringGenerator $stringGenerator, $size) {
        $this->stringGenerator = $stringGenerator; // Assigns the string generator
        $this->size = $size;                       // Assigns the size of the array
    }

    // Method to generate an array of random strings
    public function generate(): array {
        $array = []; // Initialize an empty array
        // Loop to generate the specified number of random strings
        for ($i = 0; $i < $this->size; $i++) {
            // Generate a random string and add it to the array
            $array[] = $this->stringGenerator->generate();
        }
        return $array; // Return the generated array
    }
}
