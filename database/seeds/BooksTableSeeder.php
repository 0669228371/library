<?php

use Illuminate\Database\Seeder;
use App\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::insert(
            [
                [
                    'title' => 'Декабристы',
                    'author_id' => 1
                ],
                [
                    'title' => 'Война и Мир',
                    'author_id' => 1
                ],
                [
                    'title' => 'Анна Каренина',
                    'author_id' => 1
                ],
                [
                    'title' => 'Два гусара',
                    'author_id' => 1
                ],
                [
                    'title' => 'Утро помещика',
                    'author_id' => 1
                ],
                [
                    'title' => 'Скупой рыцарь',
                    'author_id' => 2
                ],
                [
                    'title' => 'Каменный гость',
                    'author_id' => 2
                ],
                [
                    'title' => 'Пир во время чумы',
                    'author_id' => 2
                ],
                [
                    'title' => 'Дубровский',
                    'author_id' => 2
                ],
                [
                    'title' => 'Египетские ночи',
                    'author_id' => 2
                ],
                [
                    'title' => 'Скупой рыцарь',
                    'author_id' => 2
                ],
                [
                    'title' => '1834',
                    'author_id' => 3
                ],
                [
                    'title' => 'Вий',
                    'author_id' => 3
                ],
                [
                    'title' => 'Гетьман',
                    'author_id' => 3
                ],
                [
                    'title' => 'Игроки',
                    'author_id' => 3
                ],
                [
                    'title' => 'Рим',
                    'author_id' => 3
                ],
                [
                    'title' => 'Бородино',
                    'author_id' => 4
                ],
                [
                    'title' => 'Ангел',
                    'author_id' => 4
                ],
                [
                    'title' => 'Дары Терека',
                    'author_id' => 4
                ],
            ]
        );
    }
}
