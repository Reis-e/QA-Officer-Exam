<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;use Laravel\Dusk\Browser; //changed from Laravel\Dusk\Browse
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     */
    public function testBasicExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Remember Me');
        });
    }
}
