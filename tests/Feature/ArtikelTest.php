<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArtikelTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/kategori');

        $response->assertStatus(302);
    }

    // public function test_registerget()
    // {
    //     $response = $this->get('/register',[
    //         'name',
    //         'email',
    //         'password',
    //         'password_confirmation',
    //         'role',
    //     ]);

    //     $response->assertStatus(200);
    // }

    // public function test_kategori()
    // {
    //     $response = $this->post('/kategori',[
    //         'nama' => 'p',
    //     ]);
    //     $response->assertRedirect ('/kategori');
    // }


    // public function test_register()
    // {
    //     $response = $this->post('/register',[
    //         'name' =>'aldi',
    //         'email'=>'aldi@gmail.com',
    //         'password'=>'12345678',
    //         'password_confirmation' =>'12345678',
    //         'role' =>'admin',
    //     ]);

    //     $response->assertRedirect ('/home');
    // }

    public function test_login()
    {
        $response = $this->post('/login',[
            'email'=>'fikri@gmail.com',
            'password'=>'12345678',

        ]);

        $response->assertRedirect ('/home');
    }

}
