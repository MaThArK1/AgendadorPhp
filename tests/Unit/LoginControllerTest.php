<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testAuthenticateCases()
    {
        // Cria um usuário falso
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => '12345'
        ]);        

        // Testa a autenticação com credenciais inválidas
        $response = $this->post('/login', [
            'email' => 'test@example.com',
            'password' => 'wrong-password',
        ]);

        $response->assertRedirect('/login');
        $response->assertSessionHasErrors(['error' => 'Invalid email or password']);
        $this->assertFalse(Auth::check());

        // Testa a autenticação com email inválido
        $response = $this->post('/login', [
            'email' => 'not-an-email',
            'password' => 'password',
        ]);

        $response->assertRedirect('/login');
        $response->assertSessionHasErrors(['error' => 'Esse campo tem que ter um email valido.']);
        $this->assertFalse(Auth::check());

        // Testa a autenticação sem senha
        $response = $this->post('/login', [
            'email' => 'test@example.com',
            'password' => '',
        ]);

        $response->assertRedirect('/login');
        $response->assertSessionHasErrors(['error' => 'Esse campo password é obrigatório.']);
        $this->assertFalse(Auth::check());
    }
}