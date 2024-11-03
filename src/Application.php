<?php

namespace App;

// Application class
class Application
{
    // Variables to hold instances of the generators and encoder
    private RandomStringGenerator $stringGenerator;
    private RandomArrayGenerator $arrayGenerator;
    private Rot13Encoder $encoder;

    // Constructor that takes all necessary services as input
    public function __construct(RandomStringGenerator $stringGenerator, RandomArrayGenerator $arrayGenerator, Rot13Encoder $encoder)
    {
        $this->stringGenerator = $stringGenerator; // Assigns the random string generator
        $this->arrayGenerator = $arrayGenerator;     // Assigns the random array generator
        $this->encoder = $encoder;                   // Assigns the encoder
    }

    // Main method to run the application
    public function run()
    {
        // Generates a random string
        $randomString = $this->stringGenerator->generate();
        // Generates a random array
        $randomArray = $this->arrayGenerator->generate();

        // Outputs the original string
        echo "Original string: $randomString\n";
        // Outputs the encoded string
        echo "Encoded string: " . $this->encoder->encodeString($randomString) . "\n\n";

        // Outputs the original array
        echo "Original array:\n";
        print_r($randomArray);
        // Outputs the encoded array
        echo "Encoded array:\n";
        print_r($this->encoder->encodeArray($randomArray));
    }
}
