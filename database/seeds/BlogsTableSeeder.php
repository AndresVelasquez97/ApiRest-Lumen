<?php

use Illuminate\Database\Seeder;
use App\Blog;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::create([
            'id' => '56048486-2f86-483c-b4a7-8916c4355632',
            'name' => 'Blog 1',
            'author' => 'Andres'
        ]);
        Blog::create([
            'id' => 'c31e414b-2dc2-426b-aae8-8c866cae3ca4',
            'name' => 'Blog 2',
            'author' => 'Juan'
        ]);
    }
}
