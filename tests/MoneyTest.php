<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use Money\Dollar as Doller;

class MoneyTest extends TestCase
{
    public function testMultiplication(): void
    {
        $five = new Doller(5);
        $five->times(2);
        $this->assertEquals(10, $five->amount);
    }
}
