<?php


class AnimalTest extends ApiTester
{
    /**
     * @test
     */
    public function check_animal_url(){
        $response = $this->client->get('api/animais');

        $this->assertEquals(self::HTTP_OK, $response->getStatusCode());

    }


}