<?php

namespace Tests\Browser;
use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Chrome;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */

        public function testExample()
    {

              $user = factory(User::class)->create([
               'email' => 'Loppe@gita.com',
           ]);

        $this->browse(function ($browser)  use ($user) {
          $browser->visit('http://localhost:8000/login')
                      ->type('email', $user->email)
                      ->type('password', 'secret')
                      ->press('Login')
                      ->assertSee('Gita');
        });
    }
}
