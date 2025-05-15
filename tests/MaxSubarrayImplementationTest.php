<?php
declare(strict_types=1);


use LeadDeskTasks\MaxSubarrayImplementation;
use PHPUnit\Framework\TestCase;

final class MaxSubarrayImplementationTest extends TestCase
{

    public function testWithDataFromTask()
    {
        $array = [-1, 1, 5, -6, 3];
        $maxSubarray = new MaxSubarrayImplementation();
        $this->assertEquals(6, $maxSubarray->contiguous($array));
    }

    public function testFindsMaxSubarray()
    {
        $array = [1, 2, 3, -50];
        $maxSubarray = new MaxSubarrayImplementation();
        $this->assertEquals(6, $maxSubarray->contiguous($array));
    }

    public function testFindsMaxWhenArrayHasNonNumericValues()
    {
        $array = [5, 5, 'a', 3, 4, 20];
        $maxSubarray = new MaxSubarrayImplementation();
        $this->assertEquals(27, $maxSubarray->contiguous($array));

    }

    public function testForWholeArrayIsSubarray()
    {
        $array = [5, 5, 5];
        $maxSubarray = new MaxSubarrayImplementation();
        $this->assertEquals(15, $maxSubarray->contiguous($array));
    }

    public function testAllNegative()
    {
        $array = [-5, -6, -1];
        $maxSubarray = new MaxSubarrayImplementation();
        $this->assertEquals(-1, $maxSubarray->contiguous($array));
    }

    public function testForOneElement()
    {
        $array = [-5, 500, -5];
        $maxSubarray = new MaxSubarrayImplementation();
        $this->assertEquals(500, $maxSubarray->contiguous($array));
    }

    public function testForOnlyNonNumeric()
    {
        $array = ['a', 'b', 'c'];

        $maxSubarray = new MaxSubarrayImplementation();
        $this->assertEquals(0, $maxSubarray->contiguous($array));
    }

    public function testEmptyArray()
    {
        $array = [];

        $maxSubarray = new MaxSubarrayImplementation();
        $this->assertEquals(0, $maxSubarray->contiguous($array));
    }
}
