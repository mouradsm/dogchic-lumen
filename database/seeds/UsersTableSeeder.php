<?php
use Illuminate\Database\Seeder;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Diego Moura',
            'username' => 'mouradsm',
            'email' => 'diegosouza20049@hotmail.com',
            'password' => bcrypt('254585'),
        ]);
    }
}