<?php

use PHPUnit\Framework\TestCase;
use App\RandomStringGenerator;
use App\RandomArrayGenerator;

// Test case for the RandomArrayGenerator class
class RandomArrayGeneratorTest extends TestCase
{
    // Test the generate method of RandomArrayGenerator
    public function testGenerate()
    {
        // Create an instance of RandomStringGenerator with a string length of 10
        $stringGenerator = new RandomStringGenerator(10);
        
        // Create an instance of RandomArrayGenerator with the string generator and an array size of 3
        $arrayGenerator = new RandomArrayGenerator($stringGenerator, 3);
        
        // Generate an array of random strings
        $result = $arrayGenerator->generate();

        // Assert that the result contains exactly 3 strings
        $this->assertCount(3, $result);
        
        // Check that each string in the result matches the regular expression for lowercase letters and digits
        foreach ($result as $string) {
            $this->assertMatchesRegularExpression('/^[a-z0-9]+$/', $string);
        }
    }
}
