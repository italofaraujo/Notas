<?php

use App\Category;
use App\Folder;
use App\Text;
use Illuminate\Database\Seeder;

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
        
        $this->call(FolderSeeder::class);
        $this->call(NoteSeeder::class);

    }
}
