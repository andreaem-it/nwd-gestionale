<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class StatsControllerTest extends WebTestCase
{
    public function testStats()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/statistiche');
    }

}
