<?php

namespace App;

// Class responsible for generating a random string of a specified length
class RandomStringGenerator
{
    private int $length; // The length of the random string to be generated

    // Constructor that initializes the length of the random string
    public function __construct(int $length)
    {
        $this->length = $length; // Assigns the length from the constructor argument
    }

    // Generate a random string
    public function generate(): string 
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyz'; // Set of characters 
        $charactersLength = strlen($characters); // Get the length of the character set
        $randomString = ''; // Initialize an empty string to hold the random string

        // Loop to build the random string
        for ($i = 0; $i < $this->length; $i++) {
            // Append a random character from the set to the random string
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return $randomString; // Return the generated random string
    }
}
