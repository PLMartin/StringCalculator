<?php

namespace Tests\Model;

use App\Model\StringCalculator;
use PHPUnit\Framework\TestCase;



class StringCalculatorTest extends TestCase
{

    private $strinCalculator;


    public function setUp()
    {
        parent::setUp();
        $this->strinCalculator = new StringCalculator();
    }


    public function testNewLineAsSeparator()
    {
        $this->assertEquals('6', $this->strinCalculator->add("1\n2,3"));
        $this->assertEquals('Number expected but \'\n\' found at position 6.', $this->strinCalculator->add("175.2,\n35"));
    }


    public function testMissingNumberInLastPosition()
    {
        $this->assertEquals("Number expected but EOF found.", $this->strinCalculator->add("1,3,"));
    }


    public function testNegativeNumber()
    {
        $this->assertEquals(
            "Negative not allowed : -1\nNumber expected but ',' found at position 3.",
            $this->strinCalculator->add("-1,\n2"));

    }






}