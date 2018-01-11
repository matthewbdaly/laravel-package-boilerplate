<?php

namespace Tests;

use Hash;

trait CreatesApplication
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

    /**
     * Creates the application.
     *
     * Needs to be implemented by subclasses.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = parent::createApplication();

        Hash::setRounds(4);

        return $app;
    }
}
