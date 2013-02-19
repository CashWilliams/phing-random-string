<?php
/**
 * Copyright 2013 Platinum Pixs, LLC. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License.
 * A copy of the License is located at
 *
 * http://aws.amazon.com/apache2.0
 *
 * or in the "license" file accompanying this file. This file is distributed
 * on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */

/**
 * Provides basic test on the generate random string
 */
class GenerateTest extends PHPUnit_Framework_TestCase
{
    public function testGetNumericOnlyLengthOfEight()
    {
        $string = Generate::randomString('numeric', 8);

        $this->assertEquals(8, strlen($string));
        $this->assertTrue(is_numeric($string));
    }

    public function testGetNumericLowerCaseOnlyLengthOfTen()
    {
        $string = Generate::randomString('lowercase_numeric', 10);

        $this->assertEquals(10, strlen($string));
        $this->assertEquals(1, preg_match('/^[a-z0-9]/', $string));
    }

    public function testGetNumericUpperCaseOnlyLengthOfTwelve()
    {
        $string = Generate::randomString('uppercase_numeric', 12);

        $this->assertEquals(12, strlen($string));
        $this->assertEquals(1, preg_match('/^[A-Z0-9]/', $string));
    }

    public function testGetNumericUpperCaseLowerCaseLengthOfFourteen()
    {
        $string = Generate::randomString('lowercase_uppercase_numeric', 14);

        $this->assertEquals(14, strlen($string));
        $this->assertEquals(1, preg_match('/^[a-zA-Z0-9]/', $string));
    }

    public function testGetLowerCaseLengthOfFour()
    {
        $string = Generate::randomString('lowercase', 4);

        $this->assertEquals(4, strlen($string));
        $this->assertEquals(1, preg_match('/^[a-z]/', $string));
    }

    public function testGetUpperCaseLengthOfSix()
    {
        $string = Generate::randomString('uppercase', 6);

        $this->assertEquals(6, strlen($string));
        $this->assertEquals(1, preg_match('/^[A-Z]/', $string));
    }

    public function testGetUpperCaseLowerCaseLengthOfEight()
    {
        $string = Generate::randomString('uppercase', 8);

        $this->assertEquals(8, strlen($string));
        $this->assertEquals(1, preg_match('/^[a-zA-Z]/', $string));
    }
}
