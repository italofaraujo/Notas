<?php

use Illuminate\Database\Seeder;

class FolderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('TRUNCATE folders CASCADE');
        factory(App\Folder::class, 5 )->create();

    }
}
