<?php

declare(strict_types=1);

namespace Tests;

use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class SimpleTestCase extends BaseTestCase
{
    use MockeryPHPUnitIntegration;
}
