<?php

namespace Tests;

use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class SimpleTestCase extends BaseTestCase
{
    use MockeryPHPUnitIntegration;
}
