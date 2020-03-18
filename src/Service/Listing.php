<?php

namespace Traum\Service;

use Traum\Client;
use Traum\Entity;
use Traum\Enum;

/**
 * Class Picture
 *
 * @package Traum\Service
 * @author  Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
class Listing
{
    /**
     * @var Client
     */
    private $client;

    /**
     * Picture constructor.
     *
     * @param \Traum\Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Low level implementation of creating a listing. In order to store the listing
     * correctly, please provide the array in following form:
     *
     * <code>
     * [
     *   'objectType' => \Traum\Enum\ObjectType::APARTMENT,
     *   'emailType' => \Traum\Enum\EmailType::HTML_TEXT,
     *   'accessibilityId' => \Traum\Enum\Accessibility::GROUND_LEVEL,
     *   'classificationStarId' => \Traum\Enum\ClassificationStar::ONE_STAR,
     *   'classificationExpireDate' => '2017-01-01',
     *   'maxPersons' => 4,
     *   'size' => 120
     * ]
     * </code>
     *
     * In order to store the texts correctly, please provide them in following form:
     *
     * <code>
     * [
     *   \Traum\Enum\TextTypeId::LISTING_TITLE => [
     *     \Traum\Enum\Language::DEU => 'German text',
     *     \Traum\Enum\Language::ENG => 'English text',
     *   ],
     * ]
     * </code>
     *
     * @param  int   $customerId
     * @param  array $listing
     * @param  array $texts
     * @return \Traum\Entity\Listing
     */
    public function addListing($customerId, array $listing, array $texts)
    {
        $customerResource = $this->client->createCustomerResource();
        $listingResource = $this->client->createListingResource();

        // Create customer listing
        $customerListing = new Entity\CustomerListing(
            [
                Entity\CustomerListing::OBJECT_TYPE_ID => $listing['objectType'],
                Entity\CustomerListing::EMAIL_TYPE_ID => $listing['emailType'],
            ]
        );
        $customerListing = $customerResource->postListing($customerId, $customerListing);

        // Create listing
        $listing = new Entity\Listing(
            [
                Entity\Listing::ID => $customerListing->getId(),
                Entity\Listing::ACCESSIBILITY_ID => $this->getFieldValue(
                    'accessibilityId',
                    $listing
                ),
                Entity\Listing::CLASSIFICATION_STAR_ID => $this->getFieldValue(
                    'classificationStarId',
                    $listing
                ),
                Entity\Listing::CLASSIFICATION_EXPIRE_DATE => $this->getFieldValue(
                    'classificationExpireDate',
                    $listing
                ),
                Entity\Listing::MAX_PERSONS => $listing['maxPersons'],
                Entity\Listing::SIZE => $listing['size'],
                Entity\Listing::OBJECT_TYPE_ID => $listing['objectType'],
            ]
        );
        $listingResource->patch($listing);

        // Some default texts were created, update them first.
        $existingTexts = $listingResource->getTexts($customerListing->getId());

        foreach ($existingTexts as $existingText) {
            $type = $existingText->getTextTypeId();

            if (!array_key_exists($type, $texts)) {
                continue;
            }

            $language = $existingText->getLanguage();

            if (!array_key_exists($language, $texts[$type])) {
                continue;
            }

            $existingText->setText($texts[$type][$language]);
            $listingResource->patchText($customerListing->getId(), $existingText);
            unset($texts[$type][$language]);
        }

        // Create all remaining texts.
        foreach ($texts as $textType => $languages) {
            foreach ($languages as $language => $text) {
                $listingText = new Entity\ListingText(
                    [
                        Entity\ListingText::LANGUAGE => $language,
                        Entity\ListingText::TEXT_TYPE_ID => $textType,
                        Entity\ListingText::TEXT => $text,
                    ]
                );
                $listingResource->postText($customerListing->getId(), $listingText);
            }
        }

        return $listing;
    }

    /**
     * @param  string $name
     * @param  array  $struct
     * @return mixed
     */
    private function getFieldValue($name, array $struct)
    {
        if (isset($struct[$name])) {
            return $struct[$name];
        }

        return null;
    }
}
