<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_jumble(){

        $this->assertEquals("test 123", jumble("test 123!", 0));
        $this->assertEquals("uftu 123", jumble("test 123!", 1));
        $this->assertEquals("paop 123", jumble("test 123!", 100));
        $this->assertEquals("test 123", jumble("test 123!", 26));
    }
}
