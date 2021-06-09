<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use Money\Dollar as Doller;

class MoneyTest extends TestCase
{
    public function testMultiplication(): void
    {
        $five = new Doller(5);
        $this->assertEquals(new Doller(10), $five->times(2));
        $this->assertEquals(new Doller(15), $five->times(3));
    }

    public function testEquality(): void
    {
        $this->assertTrue((new Doller(5))->equals(new Doller(5)));
        $this->assertFalse((new Doller(5))->equals(new Doller(6)));
    }
}
