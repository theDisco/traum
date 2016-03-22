# Traum

[![Build Status](https://travis-ci.org/theDisco/traum.svg?branch=master)](https://travis-ci.org/theDisco/traum)

Traum is an API client for clientapi.traum-ferienwohnungen.de.

# Before you begin ...

... register. In order to start using the API you need to register using register resource.
Provide some basic information about the user and execute it once. If the request was 
correct, you will be able to start using the API. Remember to confirm your account.

```php
use Traum\Client;
use Traum\Entity;
use Traum\Enum;

$client = Client::create();
$register = new Entity\Register(
    [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'john.doe@example.com',
        "salutation_id" => Enum\Salutation::MR,
        "password" => "Pa**word!"
    ]
);
$resource = $client->createRegisterResource();
$result = $resource->post($register); // returns Entity\Register
```

# Creating Clients

```php
use Traum\Client;
use Traum\Entity;
use Traum\Enum;

$client = Client::create(['auth' => ['john.doe@example.com', 'Pa**word!']]);
```

# Want to help?

Take a look at the [roadmap](https://github.com/theDisco/traum/wiki#roadmap) and implement
one of the missing endpoints.

# TODO

* Finish documentation
* Implement missing resources
* Fix todos from the code
* Finish tests
