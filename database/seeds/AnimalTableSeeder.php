<?php
use Illuminate\Database\Seeder;
class AnimalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*DB::statement('SET FOREIGN_KEY_CHECKS=0;');*/
        /*DB::statement('PRAGMA foreign_keys = OFF');*/



        DB::table('animals')->truncate();
        factory(App\Animal::class, 10)->create();
    }
}