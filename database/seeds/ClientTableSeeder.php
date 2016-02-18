<?php
use Illuminate\Database\Seeder;
class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('clientes')->truncate();
        DB::table('animals')->truncate();
        DB::table('enderecos')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        factory('App\Cliente', 10)->create()->each(function(App\Cliente $client) {
            factory('App\Animal',rand(1,5))->create(['cliente_id' => $client->id]);
            factory('App\Endereco')->create(['cliente_id' => $client->id]);
        });
    }
}