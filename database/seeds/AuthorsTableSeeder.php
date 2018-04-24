<?php

use Illuminate\Database\Seeder;
use App\Author;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::insert(
            [
                [
                    'name' => 'Толстой Лев Николаевич'
                ],
                [
                    'name' => 'Пушкин Александр Сергеевич'
                ],
                [
                    'name' => 'Гоголь Николай Васильевич'
                ],
                [
                    'name' => 'Лермонтов Михаил Юрьевич'
                ]
            ]
        );
    }
}
