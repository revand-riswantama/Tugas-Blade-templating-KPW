<?php

namespace Tests\Feature;

use Tests\TestCase;

class PageTest extends TestCase
{
    public function test_landing_page_can_be_rendered(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('Media Online');
        $response->assertSee('Sharing knowledge');
    }

    public function test_form_page_can_be_rendered(): void
    {
        $response = $this->get('/form');
        $response->assertStatus(200);
        $response->assertSee('Buat Account Baru');
    }

    public function test_form_submission_to_welcome_page(): void
    {
        $response = $this->post('/welcome', [
            'first_name' => 'Budi',
            'last_name' => 'Santoso',
            'gender' => 'male',
            'nationality' => 'indonesia',
            'language' => ['bahasa'],
            'bio' => 'Belajar web dev',
        ]);

        $response->assertStatus(200);
        $response->assertSee('Selamat Datang, Budi Santoso');
        $response->assertSee('List data siswa');
    }

    public function test_data_page_can_be_rendered(): void
    {
        $response = $this->get('/data');
        $response->assertStatus(200);
        $response->assertSee('Data Nilai Siswa');
        $response->assertSee('Robby');
    }
}
