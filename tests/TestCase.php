<?php

namespace Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
	protected function getPackageProviders($app)
	{
		return ['Matthewbdaly\LaravelPackageBoilerplate\ServiceProvider'];
	}

	protected function getPackageAliases($app)
	{
		return [
			'Facade' => 'Matthewbdaly\LaravelPackageBoilerplate\Facade'
		];
	}
}
