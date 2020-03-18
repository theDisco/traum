# Traum

[![Build Status](https://travis-ci.org/CreativeNative/traum.svg?branch=master)](https://travis-ci.org/CreativeNative/traum)

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

After registering, the API user has to be assigned to the customer, whose listing you want to manage
using the API. In order to do that use customer resource.

```php
use Traum\Client;
use Traum\Entity;
use Traum\Enum;

// Get the customer_id from your customer account.
$customer = new Entity\Customer(
    [
        Entity\Customer::CUSTOMER_ID => 123456
    ]
);

$client = Client::create(['auth' => ['john.doe@example.com', 'Pa**word!']]);
$result = $client->createCustomerResource()->post($customer); // returns Entity\Customer
```

# Creating listing

In order to hide the low level details of the API, you can use the provided services.

## Listing Service

To facilitate the creation of the listing, you can use the service to quickly create new
listings.

```php
$client = \Traum\Client::create(['auth' => ['john.doe@example.com', 'Pa**word!']]);
// You can obtain customerId from the customer resource or just read it from
// configuration, if you manage more than one customer.
$customerId = $client->createCustomerResource()->collection()->current()->getCustomerId();
$response = $client->createListingService()->addListing(
    $customerId,
    [
        'objectType' => \Traum\Enum\ObjectType::APARTMENT,
        'emailType' => \Traum\Enum\EmailType::HTML_TEXT,
        'accessibilityId' => \Traum\Enum\Accessibility::GROUND_LEVEL,
        'classificationStarId' => \Traum\Enum\ClassificationStar::ONE_STAR,
        'classificationExpireDate' => '2017-01-01',
        'maxPersons' => 4,
        'size' => 120
    ],
    [
        // You do not have to provide all the translations.
        \Traum\Enum\TextTypeId::LISTING_TITLE => [
            \Traum\Enum\Language::DEU => 'German LISTING_TITLE',
            \Traum\Enum\Language::ENG => 'English LISTING_TITLE',
        ],
        \Traum\Enum\TextTypeId::SHORT_DESCRIPTION => [
            \Traum\Enum\Language::DEU => 'German SHORT_DESCRIPTION',
            \Traum\Enum\Language::ENG => 'English SHORT_DESCRIPTION',
        ],
        \Traum\Enum\TextTypeId::LANDLORD_DESCRIPTION => [
            \Traum\Enum\Language::DEU => 'German LANDLORD_DESCRIPTION',
            \Traum\Enum\Language::ENG => 'English LANDLORD_DESCRIPTION',
        ],
        \Traum\Enum\TextTypeId::ARRIVAL_DESCRIPTION => [
            \Traum\Enum\Language::DEU => 'German ARRIVAL_DESCRIPTION',
            \Traum\Enum\Language::ENG => 'English ARRIVAL_DESCRIPTION',
        ],
        \Traum\Enum\TextTypeId::SPECIAL_ATTRIBUTES => [
            \Traum\Enum\Language::DEU => 'German SPECIAL_ATTRIBUTES',
            \Traum\Enum\Language::ENG => 'English SPECIAL_ATTRIBUTES',
        ],
        \Traum\Enum\TextTypeId::FREE_TIME_ACTIVITIES => [
            \Traum\Enum\Language::DEU => 'German FREE_TIME_ACTIVITIES',
            \Traum\Enum\Language::ENG => 'English FREE_TIME_ACTIVITIES',
        ],
        \Traum\Enum\TextTypeId::LISTING_DESCRIPTION => [
            \Traum\Enum\Language::DEU => 'German LISTING_DESCRIPTION',
            \Traum\Enum\Language::ENG => 'English LISTING_DESCRIPTION',
        ],
        \Traum\Enum\TextTypeId::ENVIRONMENT_DESCRIPTION => [
            \Traum\Enum\Language::DEU => 'German ENVIRONMENT_DESCRIPTION',
            \Traum\Enum\Language::ENG => 'English ENVIRONMENT_DESCRIPTION',
        ],
        \Traum\Enum\TextTypeId::VACATION_AREA_DESCRIPTION => [
            \Traum\Enum\Language::DEU => 'German VACATION_AREA_DESCRIPTION',
            \Traum\Enum\Language::ENG => 'English VACATION_AREA_DESCRIPTION',
        ],
        \Traum\Enum\TextTypeId::SERVICE_AVAILABILITY => [
            \Traum\Enum\Language::DEU => 'German SERVICE_AVAILABILITY',
            \Traum\Enum\Language::ENG => 'English SERVICE_AVAILABILITY',
        ],
    ]
); // returns \Traum\Entity\Listing
```

## Picture Service

To facilitate the creation of pictures, use picture service to add multiple pictures in bulk.

```php
$client = \Traum\Client::create(['auth' => ['john.doe@example.com', 'Pa**word!']]);
// Use listing from the step before.
$listing = $client->createListingService()->addListing(/* ... */);
$client->createPictureService()->addPictures(
    $listing->getId(),
    [
        [
            'pictureUrl' => 'http://example.com/picture-outdoor.jpeg',
            'categoryId' => \Traum\Enum\PictureCategory::OUTDOOR,
            'titles' => [
                \Traum\Enum\Language::DEU => 'German OUTDOOR',
                \Traum\Enum\Language::ENG => 'English OUTDOOR',
            ],
        ],
        [
            'pictureUrl' => 'http://example.com/picture-environment.jpeg',
            'categoryId' => \Traum\Enum\PictureCategory::ENVIRONMENT,
            'titles' => [
                \Traum\Enum\Language::DEU => 'German ENVIRONMENT',
                \Traum\Enum\Language::ENG => 'English ENVIRONMENT',
            ],
        ],
        // ... and more
    ]
);
```

# Want to help?

Take a look at the [roadmap](https://github.com/theDisco/traum/wiki#roadmap) and implement
one of the missing endpoints.

# TODO

* Finish documentation
* Implement missing resources
* Fix todos from the code
* Finish tests
