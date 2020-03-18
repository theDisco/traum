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
class Picture
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
     * Add multiple pictures at the same time. Provide following array
     * as $pictures in order to process them correctly:
     *
     * <code>
     * [
     *   [
     *     'pictureUrl' => 'http://example.com/picture.jpeg',
     *     'categoryId' => \Traum\Enum\PictureCategory::OUTDOOR,
     *     'titles' => [
     *       \Traum\Enum\Language::DEU => 'German title',
     *       \Traum\Enum\Language::ENG => 'English title',
     *     ],
     *   ],
     * ]
     * </code>
     *
     * @param  int   $listingId
     * @param  array $pictures
     * @return void
     */
    public function addPictures($listingId, array $pictures)
    {
        foreach ($pictures as $picture) {
            $this->addPicture($listingId, $picture['pictureUrl'], $picture['categoryId'], $picture['titles']);
        }
    }

    /**
     * In order to store the titles correctly, provide the data in following format:
     *
     * <code>
     * [
     *   \Traum\Enum\Language::DEU => 'German title',
     *   \Traum\Enum\Language::ENG => 'English title',
     * ]
     * </code>
     *
     * @param  int    $listingId
     * @param  string $pictureUrl
     * @param  int    $categoryId
     * @param  array  $titles
     * @return bool
     */
    public function addPicture($listingId, $pictureUrl, $categoryId, array $titles)
    {
        $listing = $this->client->createListingResource();
        $picture = new Entity\ListingPicture(
            [
                Entity\ListingPicture::URL => $pictureUrl,
                Entity\ListingPicture::CATEGORY_ID => $categoryId,
            ]
        );
        $picture = $listing->postListingPicture($listingId, $picture);
        $pictureTitles = $listing->getListingPictureTitles($listingId, $picture->getId());

        foreach ($pictureTitles as $pictureTitle) {
            if (isset($titles[Enum\Language::ENG]) && $pictureTitle->getLanguage() == Enum\Language::ENG) {
                $current = $titles[Enum\Language::ENG];
            } elseif (isset($titles[Enum\Language::DEU]) && $pictureTitle->getLanguage() == Enum\Language::DEU) {
                $current = $titles[Enum\Language::DEU];
            } else {
                throw new \RuntimeException('Text for any of the language was found in the title array');
            }

            $pictureTitle->setText($current);
            $listing->patchListingPictureTitle($listingId, $picture->getId(), $pictureTitle);
        }

        return true;
    }
}
