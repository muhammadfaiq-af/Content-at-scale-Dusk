<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Browser\Pages\DashboardPage;
use App\Browser\Pages\Common;


class DashboardTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/dashboard')
                ->maximize()
                ->assertSee("Login") // Assuming you have a login button with the text "Login"
                ->type('email', '1t.aamer@gmail.com')
                ->type('password', '!Test123*')
                ->press('Login') // Assuming the login button has the name or value "Login"
                ->assertSee("Welcome back, Taimur Aamer!")
                ->assertSee("Published")
                ->assertSee("STATUS")
                ->assertSee("Completed")
                ->assertSee("Ready for Optimization")
                ->assertSee("Scheduled")
                ->assertSee("Pending Editing")
                ->assertSee("Total Posts Worked")
                ->select('dashboard-dropdown1', 'personal')
                ->assertSelected('dashboard-dropdown1', 'personal')


                ->pause(5000); 
        });
    }
}
