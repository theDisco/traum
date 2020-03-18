<?php

use \PHPUnit\Framework\TestCase;

/**
 * Class CustomerTest
 */
class CustomerTest extends TestCase
{
    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Traum\Exception\InvalidRequest
     */
    public function testCustomerCollection()
    {
        $history = [];
        $client = createClient('get_customers', $history);
        $response = $client->createCustomerResource()->collection();
        $mock = array_shift($history);

        $fixture = fixture('get_customers');
        $data = json_decode(current($fixture)['body'], JSON_OBJECT_AS_ARRAY);
        $expected = new \Traum\Entity\Customer($data['_embedded']['customer'][0]);

        $this->assertEquals('GET', $mock['request']->getMethod());
        $this->assertEquals('/customer', $mock['request']->getUri()->getPath());
        $this->assertEquals($expected, $response->current());
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Traum\Exception\InvalidRequest
     */
    public function testCustomerListings()
    {
        $history = [];
        $client = createClient('get_customer_listings', $history);
        $response = $client->createCustomerResource()->getListings(123);
        $mock = array_shift($history);

        $fixture = fixture('get_customer_listings');
        $data = json_decode(current($fixture)['body'], JSON_OBJECT_AS_ARRAY);
        $expected = new \Traum\Entity\CustomerListing($data['_embedded']['listing'][0]);

        $this->assertEquals('GET', $mock['request']->getMethod());
        $this->assertEquals('/customer/123/listing', $mock['request']->getUri()->getPath());
        $this->assertEquals($expected, $response->current());
    }
}
