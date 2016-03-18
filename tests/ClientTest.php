<?php

use App\Cliente as Cliente;

class ClientTest extends ApiTester
{


    /**
     * @test
     */

    public function busca_clientes()
    {

//        $this->makeClient();

        $response = $this->client->get('api/clientes');

        $this->assertEquals(self::HTTP_OK, $response->getStatusCode());

    }

    /**
     * @test
     */
    public function busca_unico_cliente()
    {
        /*$this->makeClient();*/

        $response = $this->client->get('api/clientes/1');

        //TODO: TROCAR ESSE ASSERT POR assertObjectHasAttribute
        $this->assertEquals(self::HTTP_OK, $response->getStatusCode());

    }

    /**
     * @test
     */
    public function erro_404_se_cliente_nao_existe()
    {
        $response = $this->client->get('api/clientes/x');

        $this->assertEquals(self::HTTP_NOT_FOUND, $response->getStatusCode());
    }

    public function makeClient($clientFields = [])
    {

        //TODO: Utilizar o factory para dar seed no SQLite

        /*factory('App\Cliente', 10)->create()->each(function(App\Cliente $client) {
            factory('App\Animal',rand(1,3))->create(['cliente_id' => $client->id]);
            factory('App\Endereco')->create(['cliente_id' => $client->id]);
        });*/

        $client = array_merge([
            'nome' => $this->fake->name,
            'ativo' => 1
        ], $clientFields);

        Cliente::create($client);
    }
}