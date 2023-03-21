<?php

declare(strict_types=1);

namespace Tests;

use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Orchestra\Testbench\BrowserKit\TestCase as BaseTestCase;

abstract class BrowserKitTestCase extends BaseTestCase
{
    use CreatesApplication;
    use MockeryPHPUnitIntegration;

    public $baseUrl = 'http://localhost';
}
