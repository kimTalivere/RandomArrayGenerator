<?php

use PHPUnit\Framework\TestCase;
use App\Rot13Encoder;

// Test case for the Rot13Encoder class
class Rot13EncoderTest extends TestCase
{
    // Test the encodeString method of Rot13Encoder
    public function testEncodeString()
    {
        // Create an instance of Rot13Encoder
        $encoder = new Rot13Encoder();
        
        // Assert that the encoded string 'hello' equals 'uryyb'
        $this->assertEquals('uryyb', $encoder->encodeString('hello'));
    }

    // Test the encodeArray method of Rot13Encoder
    public function testEncodeArray()
    {
        // Create an instance of Rot13Encoder
        $encoder = new Rot13Encoder();
        
        // Define input and expected output for the encodeArray test
        $input = ['hello', 'world'];
        $expected = ['uryyb', 'jbeyq'];

        // Assert that the encoded array matches the expected output
        $this->assertEquals($expected, $encoder->encodeArray($input));
    }
}
