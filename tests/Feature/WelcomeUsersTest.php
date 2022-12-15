<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomeUsersTest extends TestCase
{
    /** @test*/
     function it_welcomes_users_with_nickname()
    {
        $this->get('/saludo/Emanuel/ema')->assertStatus(200)->assertSee('Bienvenido Emanuel, tu apodo es: ema');
    }
    /** @test*/
     function it_welcomes_users_without_nickname()
    {
        $this->get('/saludo/Emanuel')->assertStatus(200)->assertSee('Bienvenido Emanuel.');
    }
}
