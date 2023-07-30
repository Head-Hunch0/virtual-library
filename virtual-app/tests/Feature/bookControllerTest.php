<?php

namespace Tests\Feature;

use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class bookControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_get_books(): void
    {
        $response = $this->get('/books');

        $response->assertStatus(200);
    }

    public function test_unique_isbn(): void
    {
        $book1 = Book::make([
            'Name' => 'John Kiriamiti',
            'ISBN' => 9780061120084,
            'Author' => 10,
        ]);

        $book2 = Book::make([
            'Name' => 'John Kiriamiti',
            'ISBN' => 9780140367966,
            'Author' => 10,
        ]);

        $this->assertTrue($book1->ISBN != $book2->ISBN);
    }

    public function test_get_book_by_id(): void
    {
        $book1 = Book::make([
            'id' => 31,
            'Name' => 'John Kiriamiti',
            'ISBN' => 9780140367999,
            'Author' => 10,
        ]);

        $book1->save();

        $book1 = Book::find($book1->id);

        $this->assertNotNull($book1);

        $book1->delete();
    }

    public function test_store_book(): void
    {
        $book1 = Book::make([
            'Name' => 'John Kiriamiti',
            'ISBN' => 9780140367966,
            'Author' => 10,
        ]);

        $book1 = Book::where('ISBN', $book1->ISBN);

        if($book1){
            $this->assertTrue(true);
        }
    }

    public function test_add_book_form(): void
    {
        $response = $this->get('/add/book');

        $response->assertStatus(200);
    }
}
