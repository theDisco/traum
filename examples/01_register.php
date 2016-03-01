<?php

$client = \Traum\Client::create();
$register = new \Traum\Entity\Register(
    [
        "first_name" => 'John',
        "last_name" => "Doe",
        "email" => "john.doe@example.com",
        "salutation_id" => \Traum\Enum\Salutation::MR,
        "password" => "Pa**word?"
    ]
);
$resource = $client->createRegisterResource();
$result = $resource->post($register);
print_r($result);
