<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserModuleTest extends TestCase
{
    /** @test */
    function it_loads_the_users_list_page()
    {
        //con assertSee compruebo que en la pagina generada en respuesta se puede ver el texto 'USUARIOS'
        $this->get('/usuarios')->assertStatus(200)->assertSee('USUARIOS');
        
    }
    /** @test */
    function it_loads_the_users_details_page()
    {
        //con assertSee compruebo que en la pagina generada en respuesta se puede ver el texto 'Detalle de usuario: 5'
        $this->get('/usuarios/5')->assertStatus(200)->assertSee('Detalle de usuario: 5');
        
    }
    /** @test */
    function it_loads_the_new_users_page()
    {
        //con assertSee compruebo que en la pagina generada en respuesta se puede ver el texto 'Crear nuevo usuario'
        $this->get('/usuarios/nuevo')->assertStatus(200)->assertSee('Crear nuevo usuario');
        
    }
}
