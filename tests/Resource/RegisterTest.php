<?php

class RegisterTest extends \PHPUnit_Framework_TestCase
{
    public function testRegisterNewUser()
    {
        $history = [];
        $client = createClient('post_register', $history);
        $entity = new \Traum\Entity\Register(
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'john.doe@example.com',
                'salutation_id' => \Traum\Enum\Salutation::MR,
                'password' => 'Secure Pa55word!',
                'company' => 'Acme',
            ]
        );
        $response = $client->createRegisterResource()->post($entity);
        $mock = array_shift($history);

        $this->compare($entity, $mock['request']);
        $this->compare($response, $mock['response']);
    }

    private function compare(\Traum\Entity $entity, $transport)
    {
        $request = json_decode((string) $transport->getBody(), JSON_OBJECT_AS_ARRAY);
        $this->assertEquals($entity->getRawData(), $request);
    }
}
