<?php

namespace Moment;

use Moment\Moment;
/**
 * Generated by PHPUnit_SkeletonGenerator on 2014-10-01 at 20:26:58.
 */
class MomentTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
     * @covers Moment\Moment::resetDateTime
     */
    public function testMoment()
    {
        $data = '1923-12-31 12:30:00';
        $m = new Moment($data);
        $this->assertEquals('1923-12-31T12:30:00+0000', $m->format());
        
        $data = '1923-12-31T12:30:00.000';
        $m = new Moment($data);
        $this->assertEquals('1923-12-31T12:30:00+0000', $m->format());
        
        $data = '1923-12-31T12:30:00.123';
        $m = new Moment($data);
        $this->assertEquals('1923-12-31T12:30:00+0000', $m->format());
        
        $data = '1923-12-31T12:30:00.123+02:00';
        $m = new Moment($data);
        $this->assertEquals('1923-12-31T12:30:00+0200', $m->format());
        
        $data = '1923-12-31T12:30:00.123+0200';
        $m = new Moment($data);
        $this->assertEquals('1923-12-31T12:30:00+0200', $m->format());
        
        $data = '1923-12-31T12:30:00.123Z';
        $m = new Moment($data);
        $this->assertEquals('1923-12-31T12:30:00+0000', $m->format());
        
        $data = '1923-12-31T12:30:00.123Europe/Warsaw';
        $m = new Moment($data);
        $this->assertEquals('1923-12-31T12:30:00+0100', $m->format());
        
        $data = '1923-12-31T12:30:00.123Europe/Warsaw';
        $m = new Moment($data,'UTC');
        $this->assertEquals('1923-12-31T12:30:00+0100', $m->format());
        
        $data = '1923-12-31T12:30:00.123UTC';
        $m = new Moment($data,'Europe/Warsaw');
        $this->assertEquals('1923-12-31T12:30:00+0000', $m->format());
    }

}
