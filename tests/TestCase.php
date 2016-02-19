<?php

class TestCase extends Laravel\Lumen\Testing\TestCase implements \Lukasoppermann\Httpstatus\Httpstatuscodes
{
    protected $client;

    /**
     * Creates the application.
     *
     * @return \Laravel\Lumen\Application
     */
    public function createApplication()
    {
        return require __DIR__.'/../bootstrap/app.php';
    }

    public function setUp(){
        parent::setUp();

        $this->client = new GuzzleHttp\Client([
            'base_uri' => 'http://localhost:8000/api',
            'exceptions' => false,
        ]);
    }




}
