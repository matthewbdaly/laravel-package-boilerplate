<?php

namespace Tests;

use Orchestra\Testbench\BrowserKit\TestCase as BaseTestCase;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Hash;

class BrowserKitTestCase extends BaseTestCase
{
    use CreatesApplication, MockeryPHPUnitIntegration;

    public $baseUrl = 'http://localhost';
}
