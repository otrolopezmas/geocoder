<?php

namespace Otrolopezmas\Geocoder\Tests;

use Dotenv\Dotenv;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

class TestCase extends PHPUnitTestCase
{
    protected function setUp()
    {
        parent::setUp();

        $this->loadEnvironmentVariables();
    }

    protected function loadEnvironmentVariables()
    {
        if (! file_exists(__DIR__.'/../.env')) {
            return;
        }

        $dotenv = new Dotenv(__DIR__.'/..');

        $dotenv->load();
    }
}
