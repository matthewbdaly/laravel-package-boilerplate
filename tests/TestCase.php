<?php

declare(strict_types=1);

namespace Tests;

use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    use MockeryPHPUnitIntegration;
}
