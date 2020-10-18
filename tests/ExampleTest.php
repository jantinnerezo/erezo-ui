<?php

namespace Jantinnerezo\ErezoUi\Tests;

use Orchestra\Testbench\TestCase;
use Jantinnerezo\ErezoUi\ErezoUiServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [ErezoUiServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
