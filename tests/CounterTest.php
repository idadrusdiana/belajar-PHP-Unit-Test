<?php

namespace ProgrammerZamanNow\Test;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{
    private Counter $counter;

    protected function setUp(): void
    {
        $this->counter = new Counter();
        echo "Membuat Counter" . PHP_EOL;
    }

    public function testCounter()
    {
        $this->counter->increment();        
        Assert::assertEquals(1, $this->counter->getCounter());

        $this->counter->increment();        
        $this->assertEquals(2, $this->counter->getCounter());

        $this->counter->increment();        
        self::assertEquals(3, $this->counter->getCounter());
    }
    
    //ini bagian dari yang namanya annotation
    /**
     * @test
     */
    public function increment(){

        self::markTestSkipped("Masih ada error yang bingung");

        $this->counter->increment();
        Assert::assertEquals(1, $this->counter->getCounter());
    }

    public function testFirst(): Counter
    {
        $this->counter->increment();
        $this->assertEquals(1, $this->counter->getCounter());
        return $this->counter;
    }

    protected function tearDown(): void
    {
        echo "Tear Down". PHP_EOL;
    }

    /**
     * @after
     */
    protected function after(): void
    {
        echo "After" . PHP_EOL;
    }

    /**
     * @requires OSFAMILY Windows
     */
    public function testOnlyWndows()
    {
        self::assertTrue(true, "Only in Windows");
    }
}
