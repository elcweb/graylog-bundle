<?php

namespace Elcweb\GraylogBundle\Monolog\Processor;

/**
 * Class EnvironmentProcessor
 * @package Elcweb\GraylogBundle\Monolog\Processor
 */
class EnvironmentProcessor
{
    /** @var string */
    private $environment;

    /**
     * EnvironmentProcessor constructor.
     *
     * @param string $environment
     */
    public function __construct($environment)
    {
        $this->environment = (string)$environment;
    }

    /**
     * @param array $record
     *
     * @return array
     */
    public function invoke(array $record)
    {
        $record['extra']['environment'] = $this->environment;

        return $record;
    }
}
