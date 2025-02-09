<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testlogin(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->type('email', 'cruickshank.anita@example.com')
                    ->type('password', 'password')
                    ->click('button[type="submit"]');
                    //->assertSee('Remember Me');
        });
    }
}
