<?php

namespace Condividendo\ArubaEInvoicing\Tests;

use Condividendo\ArubaEInvoicing\ServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            ServiceProvider::class,
        ];
    }
}
