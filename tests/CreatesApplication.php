<?php

namespace Tests;

use Hash;

trait CreatesApplication
{
    protected function getPackageProviders($app)
    {
        return ['Package\ServiceProvider'];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Facade' => 'Package\Facade'
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
