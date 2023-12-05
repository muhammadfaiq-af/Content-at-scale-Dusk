<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;

class LoginPage extends Page
{
    /**
     * Get the URL for the page.
     */
    public function url(): string
    {
        return '/login';
    }

    /**
     * Assert that the browser is on the page.
     */
    public function assert(Browser $browser): void
    {
        $browser->assertSee('Welcome back, Taimur Aamer!');
    }

    /**
     * Get the element shortcuts for the page.
     *
     * @return array<string, string>
     */
    public function elements(): array
    {
        return [
            '@email' => 'input[id="email"]',
            '@password' => 'input[id="password"]',
            '@login-button' => 'button.submit[type="submit"]',
            '@profileIcon' => '[class="drop-down user-option"]',
            '@logout' => '[class="bx bx-power-off me-2"]',
        ];
    }
}
