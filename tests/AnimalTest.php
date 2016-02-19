<?php


class AnimalTest extends TestCase
{
    /**
     * @test
     */
    public function check_animal_url(){
        $response = $this->client->get('api/animais');

        $this->assertEquals(self::HTTP_OK, $response->getStatusCode());

    }


}