<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Browser\Pages\LoginPage;
use App\Browser\Pages\Common;


class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testUserLoginWithValidCredentials(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->maximize()
                ->assertSee("Login") // Assuming you have a login button with the text "Login"
                ->type('email', '1t.aamer@gmail.com')
                ->type('password', '!Test123*')
                ->press('Login') // Assuming the login button has the name or value "Login"
                ->assertSee("Welcome back, Taimur Aamer!");
        });
    }

    public function testUserIsAbleToLogout(): void
    {
        $this->browse(function (Browser $browser) {
            // $browser->visit('/login')
            $browser->click('[class="drop-down user-option"]')
                ->click('[class="bx bx-power-off me-2"]')
                ->assertSee("Welcome Back!")
                ->pause(5000);
        });
    }
}
