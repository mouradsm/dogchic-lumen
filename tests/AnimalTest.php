<?php


class AnimalTest extends ApiTester
{
    /**
     * @test
     */
    public function busca_animais()
    {

        $response = $this->client->get('api/animais');

        $this->assertEquals(self::HTTP_OK, $response->getStatusCode());

    }

    /**
     * @test
     */
    public function busca_animal_unico() {
        $response = $this->client->get('api/animais/1');

        $this->assertEquals(self::HTTP_OK, $response->getStatusCode());
    }

    /**
     * @test
     */
    public function erro_404_se_animal_nao_existe() {
        $response = $this->client->get('api/animais/x');
        $this->assertEquals(self::HTTP_NOT_FOUND, $response->getStatusCode());
    }

}