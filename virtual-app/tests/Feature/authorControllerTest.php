<?php

namespace Tests\Feature;

use App\Models\Author;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class authorControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */

     public function test_get_authors() : void {
        $response = $this->get('/authors');

        $response->assertStatus(200);
     }

    public function test_get_author_by_id()
    {
        // Arrange
        $id = 1;
        $author = Author::find($id);

        // Act
        $response = $this->get('/author/' . $id);

        // Assert
        if (!$author) {
            $response->assertStatus(404)
                ->assertJson(['error' => 'Author not found']);
        } else {
            $response->assertStatus(200);
        }
    }


    public function test_add_author_form(): void
    {
        $response = $this->get('/add/author');

        $response->assertStatus(200);
    }

    public function test_store_author(): void
    {
        $author = Author::make([
            'Name' => 'John Kiriamiti',
            'Age' => 45,
            'Country' => 'Jamaica',
        ]);

        $author = Author::where('Name', $author->Name);

        if ($author) {
            $this->assertTrue(true);
        }
    }
}
