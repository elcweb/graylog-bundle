<?php

namespace Elcweb\GraylogBundle\tests\unit\Monolog\Processor;

use Elcweb\GraylogBundle\Monolog\Processor\EnvironmentProcessor;

/**
 * Class EnvironmentProcessorTest
 * @package Elcweb\GraylogBundle\tests\unit\Monolog\Processor
 */
class EnvironmentProcessorTest extends \PHPUnit_Framework_TestCase
{
    /** @var string */
    private $environment;

    public function setUp()
    {
        $this->environment = 'dev';
    }

    /**
     * @param $expected
     * @param $environment
     *
     * @dataProvider invokeData
     */
    public function testInvoke($expected, $environment)
    {
        $this->assertSame($expected, (new EnvironmentProcessor($environment))->invoke([])['extra']['environment']);
    }

    public function invokeData()
    {
        return [
            ['dev', 'dev'],
            ['123', 123],
            ['', null],
        ];
    }
}
