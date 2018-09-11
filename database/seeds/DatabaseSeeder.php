<?php

use Illuminate\Database\Seeder;

use App\Models\Gallery;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        $this->call(GalleryTableSeeder::class);
    }
}
