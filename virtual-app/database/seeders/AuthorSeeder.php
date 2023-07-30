<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $AuthorData= [
            [
                'Name'=> 'John Smith',
                'Age'=>rand(25,80),
                'Country'=> 'United States'

            ],
            [
                'Name' => 'Alice Johnson',
                'Age' => rand(25, 80),
                'Country' => 'Canada'

            ],
            [
                'Name' => 'Michael Brown',
                'Age' => rand(25, 80),
                'Country' => 'United Kingdom'

            ],
            [
                'Name' => 'Sophia Lee',
                'Age' => rand(25, 80),
                'Country' => 'Australia'

            ],
            [
                'Name' => 'David Nguyen',
                'Age' => rand(25, 80),
                'Country' => 'France'

            ],
            [
                'Name' => 'Emily Martinez',
                'Age' => rand(25, 80),
                'Country' => 'Germany'

            ],
            [
                'Name' => 'William Kim',
                'Age' => rand(25, 80),
                'Country' => 'Italy'

            ],
            [
                'Name' => 'Olivia Wang',
                'Age' => rand(25, 80),
                'Country' => 'Japan'

            ],
            [
                'Name' => 'James Garcia',
                'Age' => rand(25, 80),
                'Country' => 'China'

            ],
            [
                'Name' => 'Emma Lopez',
                'Age' => rand(25, 80),
                'Country' => 'India'

            ],
            [
                'Name' => 'Ethan Kim',
                'Age' => rand(25, 80),
                'Country' => 'Brazil'

            ],
            [
                'Name' => 'Isabella Hernandez',
                'Age' => rand(25, 80),
                'Country' => 'Mexico'

            ],
            [
                'Name' => 'Noah Martinez',
                'Age' => rand(25, 80),
                'Country' => 'Spain'

            ],
            [
                'Name' => 'Ava Patel',
                'Age' => rand(25, 80),
                'Country' => 'South Korea'

            ],
            [
                'Name' => 'Liam Rodriguez',
                'Age' => rand(25, 80),
                'Country' => 'Russia'

            ],
            [
                'Name' => 'Sophia Lee',
                'Age' => rand(25, 80),
                'Country' => 'Nigeria'

            ],
            [
                'Name' => 'Mason Nguyen',
                'Age' => rand(25, 80),
                'Country' => 'South Africa'

            ],
            [
                'Name' => 'Amelia Kim',
                'Age' => rand(25, 80),
                'Country' => 'Egypt'

            ],
            [
                'Name' => 'Oliver Patel',
                'Age' => rand(25, 80),
                'Country' => 'Kenya'

            ],
            [
                'Name' => 'Mia Wang',
                'Age' => rand(25, 80),
                'Country' => 'Argentina'

            ],
            [
                'Name' => 'Elijah Garcia',
                'Age' => rand(25, 80),
                'Country' => 'Saudi Arabia'

            ],
            [
                'Name' => 'Charlotte Hernandez',
                'Age' => rand(25, 80),
                'Country' => 'Thailand'

            ],
            [
                'Name' => 'Alexander Smith',
                'Age' => rand(25, 80),
                'Country' => 'Sweden'

            ],
            [
                'Name' => 'Harper Johnson',
                'Age' => rand(25, 80),
                'Country' => 'Netherlands'

            ],
            [
                'Name' => 'Logan Brown',
                'Age' => rand(25, 80),
                'Country' => 'Belgium'

            ],
            [
                'Name' => 'Ella Lee',
                'Age' => rand(25, 80),
                'Country' => 'Switzerland'

            ],
            [
                'Name' => 'Benjamin Nguyen',
                'Age' => rand(25, 80),
                'Country' => 'Norway'

            ],
            [
                'Name' => 'Abigail Martinez',
                'Age' => rand(25, 80),
                'Country' => 'Denmark'

            ],
            [
                'Name' => 'Sebastian Kim',
                'Age' => rand(25, 80),
                'Country' => 'Greece'

            ],
            [
                'Name' => 'Sofia Wang',
                'Age' => rand(25, 80),
                'Country' => 'Turkey'

            ],

        ];

        foreach ($AuthorData as $data){
            Author::create($data);
        }
    }
}
