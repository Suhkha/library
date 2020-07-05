<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginFalseTest extends TestCase
{
  public function testLoginFalse()
  {
    $credentials = [
      'email' => 'user@maniak.co',
      'password' => 'dontwantmybook'
    ];

    $this->assertInvalidCredentials($credentials);
  }
}
