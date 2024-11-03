<?php

use PHPUnit\Framework\TestCase;
use App\RandomStringGenerator;

// Test case for the RandomStringGenerator class
class RandomStringGeneratorTest extends TestCase
{
    // Test the generate method of RandomStringGenerator
    public function testGenerate()
    {
        // Create an instance of RandomStringGenerator with a string length of 12
        $generator = new RandomStringGenerator(12);
        
        // Generate a random string
        $result = $generator->generate();

        // Assert that the generated string has a length of 12
        $this->assertEquals(12, strlen($result));
        
        // Check that the generated string matches the regular expression for lowercase letters and digits
        $this->assertMatchesRegularExpression('/^[a-z0-9]+$/', $result);
    }
}
