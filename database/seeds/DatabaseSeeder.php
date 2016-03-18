<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeyCheck();
        Model::unguard();

        /*$this->call(UsersTableSeeder::class);
        $this->call(EventsTableSeeder::class);*/
        $this->call(AnimalTableSeeder::class);
        $this->call(ClienteTableSeeder::class);

        Model::reguard();
        $this->enableForeignKeyCheck();
    }

    protected function disableForeignKeyCheck(){
        $connection = config('database.connections')[config('database.default')];
        $sql='';
        switch ($connection['driver']) {
            case 'mysql':
                $sql='SET FOREIGN_KEY_CHECKS = 0';
                break;
            case 'sqlite':
                $sql='PRAGMA foreign_keys = OFF';
                break;
        }

        DB::statement($sql);
    }

    protected function enableForeignKeyCheck(){
        $connection = config('database.connections')[config('database.default')];
        $sql='';
        switch ($connection['driver']) {
            case 'mysql':
                $sql='SET FOREIGN_KEY_CHECKS = 1';
                break;
            case 'sqlite':
                $sql='PRAGMA foreign_keys = ON';
                break;
        }

        DB::statement($sql);
    }

}