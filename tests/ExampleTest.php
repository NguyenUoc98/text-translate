<?php

namespace Uocnv\TextTranslate\Tests;

use Orchestra\Testbench\TestCase;
use Uocnv\TextTranslate\TextTranslateServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [TextTranslateServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
