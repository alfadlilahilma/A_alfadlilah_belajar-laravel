<?php
namespace Database\Seeders;

//use Illuminate\Database\console\seeds\withoutModelEvents;
use Illuminate\Database\seeder;

class DatabaseSeeder extends Seeder
{
    public function run():void
    {
        $this->call([
            UserSeeder::class,
        ]);
    }
}
