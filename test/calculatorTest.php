<?php

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-06-12 at 23:22:00.
 */
class calculatorTest extends PHPUnit_Framework_TestCase {

    /**
     * @var calculator
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new calculator;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * Generated from @assert (1, 1) == 2.
     *
     * @covers calculator::add
     */
    public function testAdd() {
        $this->assertEquals(
                2
                , $this->object->add(1, 1)
        );
    }

}
