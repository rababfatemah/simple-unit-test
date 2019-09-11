<?php

use PHPUnit\Framework\TestCase;
use sampleUnitTestExample\Multiplication;

class MultiplicationTest extends TestCase
{
    protected $multiply;
    /**
     * @var array
     */
    private $arr;
    public function setUp()
    {
        $this->multiply = new Multiplication();
        $this->arr = [1,2,3,4,5,6];
    }
    public function testMultiplyMultiplication()
    {
        $this->assertEquals(720, $this->multiply->multiply($this->arr));
    }
}
