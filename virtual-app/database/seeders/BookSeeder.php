<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        $booksData = [
  [
    "name"=> "The Secret Garden",
    "ISBN"=> "9780140367966",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "To Kill a Mockingbird",
    "ISBN"=> "9780061120084",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "1984",
    "ISBN"=> "9780451524935",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "Pride and Prejudice",
    "ISBN"=> "9780141439518",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "Harry Potter and the Sorcerer's Stone",
    "ISBN"=> "9780590353427",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "The Great Gatsby",
    "ISBN"=> "9780743273565",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "Moby-Dick",
    "ISBN"=> "9780553213119",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "The Catcher in the Rye",
    "ISBN"=> "9780316769488",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "Jane Eyre",
    "ISBN"=> "9780141441146",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "The Hobbit",
    "ISBN"=> "9780618260300",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "Brave New World",
    "ISBN"=> "9780060850524",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "The Lord of the Rings=> The Fellowship of the Ring",
    "ISBN"=> "9780618346264",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "Dracula",
    "ISBN"=> "9780486411095",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "The Odyssey",
    "ISBN"=> "9780140449112",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "Frankenstein",
    "ISBN"=> "9780141439471",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "The Picture of Dorian Gray",
    "ISBN"=> "9780141439570",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "Wuthering Heights",
    "ISBN"=> "9780141439556",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "The Adventures of Huckleberry Finn",
    "ISBN"=> "9780486280615",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "The Count of Monte Cristo",
    "ISBN"=> "9780140449266",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "The Scarlet Letter",
    "ISBN"=> "9780142437261",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "Alice's Adventures in Wonderland",
    "ISBN"=> "9780486275437",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "Little Women",
    "ISBN"=> "9780451529305",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "Gulliver's Travels",
    "ISBN"=> "9780141439495",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "Sense and Sensibility",
    "ISBN"=> "9780141439662",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "Crime and Punishment",
    "ISBN"=> "9780486415871",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "Anna Karenina",
    "ISBN"=> "9780143035008",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "The Adventures of Tom Sawyer",
    "ISBN"=> "9780140366723",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "One Hundred Years of Solitude",
    "ISBN"=> "9780060883287",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "Winnie-the-Pooh",
    "ISBN"=> "9780140361216",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "A Tale of Two Cities",
    "ISBN"=> "9780486406510",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "The Divine Comedy",
    "ISBN"=> "9780451208637",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "War and Peace",
    "ISBN"=> "9781400079988",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "Don Quixote",
    "ISBN"=> "9780060934347",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "The Grapes of Wrath",
    "ISBN"=> "9780143039433",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "The Iliad",
    "ISBN"=> "9780140275360",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "Treasure Island",
    "ISBN"=> "9780141321004",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "The Adventures of Sherlock Holmes",
    "ISBN"=> "9780451532115",
    "author"=>rand(1,30) ,
  ],
  [
    "name"=> "The Three Musketeers",
    "ISBN"=> "9780140440256",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "The Brothers Karamazov",
    "ISBN"=> "9780374528379",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "The Hound of the Baskervilles",
    "ISBN"=> "9780141330037",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "Great Expectations",
    "ISBN"=> "9780486415864",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "A Christmas Carol",
    "ISBN"=> "9780486268651",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "The War of the Worlds",
    "ISBN"=> "9780486436586",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "Frankenstein",
    "ISBN"=> "9781631060151",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "Les Misérables",
    "ISBN"=> "9780140444308",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "Heart of Darkness",
    "ISBN"=> "9780486413631",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "The Jungle Book",
    "ISBN"=> "9780486419046",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "Sense and Sensibility",
    "ISBN"=> "9781616418324",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "The Wind in the Willows",
    "ISBN"=> "9780451530166",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "Oliver Twist",
    "ISBN"=> "9780141439747",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "The Importance of Being Earnest",
    "ISBN"=> "9780486264783",
    "author"=>rand(1,30),
  ],
  [
    "name"=> "The Call of the Wild",
    "ISBN"=> "9780486264721",
    "author"=>rand(1,30),
        ],
  [
    "name"=> "The Republic",
    "ISBN"=> "9780486411217",
    "author"=>rand(1,30),
        ],
  [
    "name"=> "Paradise Lost",
    "ISBN"=> "9780486298238",
    "author"=>rand(1,30),
    ]
  ];

  foreach ($booksData as $book){
    Book::create($book);
  }
}
}


