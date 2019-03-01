<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/27/2018
 * Time: 5:03 PM
 */

include_once('FizzBuzz.php');
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testFizz3()
    {
        $number = 3;
        $expected = "Fizz";

        $result = new FizzBuzz($number);
        $this->assertEquals($expected, $result);
    }

    public function testFizz6()
    {
        $number = 6;
        $expected = "Fizz";

        $result = new FizzBuzz($number);
        $this->assertEquals($expected, $result);
    }

    public function testFizz5()
    {
        $number = 5;
        $expected = "Buzz";

        $result = new FizzBuzz($number);
        $this->assertEquals($expected, $result);
    }

    public function testFizz15()
    {
        $number = 15;
        $expected = "FizzBuzz";

        $result = new FizzBuzz($number);
        $this->assertEquals($expected, $result);
    }

    public function testFizz7()
    {
        $number = 7;
        $expected = $number."";

        $result = new FizzBuzz($number);
        $this->assertEquals($expected, $result);
    }
}