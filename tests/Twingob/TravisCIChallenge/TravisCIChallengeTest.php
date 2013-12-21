<?php

namespace Twingob\TravisCIChallenge;

class TravisCIChallengeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var TravisCIChallenge
     */
    protected $skeleton;

    protected function setUp()
    {
        $this->skeleton = new TravisCIChallenge;
    }

    public function testNew()
    {
        $actual = $this->skeleton;
        $this->assertInstanceOf('\Twingob\TravisCIChallenge\TravisCIChallenge', $actual);
    }

    /**
     * @expectedException \Twingob\TravisCIChallenge\Exception\LogicException
     */
    public function testException()
    {
        throw new Exception\LogicException;
    }
}
