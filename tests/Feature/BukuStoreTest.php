<?php

namespace Tests\Feature;

use App\Models\Buku;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BukuStoreTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_form_displays_a_submit_button(): void
    {
        $response = $this->get(route('bukus.create'));

        $response->assertOk();
        $response->assertSee('type="submit"', false);
        $response->assertSee('Simpan');
    }

    public function test_user_can_create_a_book(): void
    {
        $response = $this->post('/bukus', [
            'kode_buku' => 'BK-1001',
            'judul' => 'Belajar Laravel',
            'kategori' => 'Teknologi',
            'penulis' => 'Budi',
            'tahun_terbit' => 2025,
            'jumlah' => 10,
            'keterangan' => 'Buku praktis Laravel',
        ]);

        $response->assertRedirect(route('bukus.index'));
        $this->assertDatabaseHas('bukus', ['kode_buku' => 'BK-1001', 'judul' => 'Belajar Laravel']);
        $this->assertEquals(1, Buku::count());
    }
}
