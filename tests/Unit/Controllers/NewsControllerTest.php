<?php

namespace Tests\Unit;
use App\Models\News;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
// use PHPUnit\Framework\TestCase;
use Tests\Testcase;

class NewsControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_noticias_index()
    {
        $response = $this->get('/noticias');
    
        $response->assertStatus(200);
        $response->assertViewIs('noticias.index');
        $response->assertViewHas('noticias');
    }
    public function test_noticia_create() {
        $noticia = News::factory()->create(); // Cria um usuário aleatório usando a factory
    
        $response = $this->post('/news', [
            'titulo' => $noticia->titulo,
            'conteudo' => $noticia->conteudo,
            'username' => $noticia->username
        ]);
        $this->assertDatabaseHas('news', [
            'titulo' => $noticia->titulo,
            'conteudo' => $noticia->conteudo,
            'username' => $noticia->username
        ]);
    }
}