<?php

use Laravel\Lumen\Testing\DatabaseTransactions;
use Faker\Factory as Faker;

use Illuminate\Support\Facades\Artisan as Artisan;

class ApiTester extends TestCase
{
    /**
     * @var Faker
     */
    protected $fake;

    /** @var  GuzzleHttp\Client */
    protected $client;

    function __construct()
    {
        $this->fake = Faker::create();
    }

    public function setUp()
    {
        parent::setUp();


        $this->refreshApplication();

        $this->client = new GuzzleHttp\Client([
            'base_uri' => 'http://localhost:8000/api',
            'exceptions' => false,
        ]);

        /*$this->artisan('migrate:refresh');
        $this->artisan('db:seed');*/
    }
}
