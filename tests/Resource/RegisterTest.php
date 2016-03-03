<?php

class RegisterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider createEntity
     */
    public function testRegisterNewUser(\Traum\Entity\Register $entity)
    {
        $history = [];
        $client = createClient('post_register', $history);
        $response = $client->createRegisterResource()->post($entity);
        $mock = array_shift($history);

        $this->assertEquals('POST', $mock['request']->getMethod());
        $this->assertEquals('/register', $mock['request']->getUri()->getPath());
        compare($entity, $mock['request'], $this);
        compare($response, $mock['response'], $this);
    }

    /**
     * @dataProvider createEntity
     */
    public function testConflictResponse(\Traum\Entity\Register $entity)
    {
        try {
            $history = [];
            $client = createClient('error_conflict', $history);
            $client->createRegisterResource()->post($entity);
            $this->assertTrue(false);
        } catch (\Traum\Exception\InvalidRequest $e) {
            $this->assertEquals('409 Conflict: Duplicate entry! Customer already used.', $e->getMessage());
            $expected = [
                'type' => 'http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html',
                'title' => 'Conflict',
                'status' => 409,
                'detail' => 'Duplicate entry! Customer already used.'
            ];
            $this->assertEquals((object) $expected, $e->getContent());
        }
    }

    public function createEntity()
    {
        return [
            [
                new \Traum\Entity\Register(
                    [
                        'first_name' => 'John',
                        'last_name' => 'Doe',
                        'email' => 'john.doe@example.com',
                        'salutation_id' => \Traum\Enum\Salutation::MR,
                        'password' => 'Secure Pa55word!',
                        'company' => 'Acme',
                    ]
                )
            ]
        ];
    }
}
