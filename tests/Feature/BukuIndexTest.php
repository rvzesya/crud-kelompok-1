<?php

namespace Tests\Feature;

use App\Models\Buku;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BukuIndexTest extends TestCase
{
    use RefreshDatabase;

    public function test_homepage_displays_the_book_list(): void
    {
        Buku::factory()->create([
            'judul' => 'Buku halaman utama',
        ]);

        $response = $this->followingRedirects()->get('/');

        $response->assertOk();
        $response->assertSee('Buku halaman utama');
    }
}
