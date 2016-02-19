<?php


class ClientTest extends TestCase
{
    /**
     * @test
     */
    public function check_clients_url(){
        $response = $this->client->get('/api/clientes');

        $this->assertEquals(self::HTTP_OK, $response->getStatusCode());

       // $this->markTestIncomplete('add expected return data.');

    }
}