<?php

use Traum\Entity;
use Traum\Enum;
use Traum\Transformer;
use \PHPUnit\Framework\TestCase;

/**
 * Class ListingTest
 */
class ListingTest extends TestCase
{
    /**
     * @throws \Traum\Exception\InvalidRequest
     */
    public function testGetListing()
    {
        $history = [];
        $client = createClient('get_listing', $history);
        $response = $client->createListingResource()->get(131237);
        $mock = array_shift($history);

        $this->assertEquals('GET', $mock['request']->getMethod());
        $this->assertEquals('/listing/131237', $mock['request']->getUri()->getPath());
        compare($response, $mock['response'], $this);
    }

    /**
     * @throws \Traum\Exception\InvalidRequest
     */
    public function testPatchListing()
    {
        $history = [];
        $client = createClient('patch_listing', $history);
        $entity = new Traum\Entity\Listing(
            [
                'accessibility_id' => 1,
                'classification_star_id' => 5,
                'classification_expire_date' => '2017-01-01',
                'max_persons' => 5,
                'size' => 120,
                'object_type_id' => 2,
            ]
        );
        $patch = clone $entity;
        $patch->setId(131237);
        $response = $client->createListingResource()->patch($patch);
        $mock = array_shift($history);

        $this->assertEquals('PATCH', $mock['request']->getMethod());
        $this->assertEquals('/listing/131237', $mock['request']->getUri()->getPath());
        compare($entity, $mock['request'], $this);
        compare($response, $mock['response'], $this);
    }

    /**
     * @throws \Traum\Exception\InvalidRequest
     */
    public function testGetListingTexts()
    {
        $history = [];
        $client = createClient('get_listing_texts', $history);
        $response = $client->createListingResource()->getTexts(131237);
        $mock = array_shift($history);

        $fixture = fixture('get_listing_texts');
        $data = json_decode(current($fixture)['body'], JSON_OBJECT_AS_ARRAY);
        $expected = new \Traum\Entity\ListingText($data['_embedded']['text'][0]);

        $this->assertEquals('GET', $mock['request']->getMethod());
        $this->assertEquals('/listing/131237/text', $mock['request']->getUri()->getPath());
        $this->assertEquals($expected, $response->current());
    }

    /**
     * @throws \Traum\Exception\InvalidRequest
     */
    public function testPostListingText()
    {
        $history = [];
        $client = createClient('post_listing_text', $history);
        $entity = new Traum\Entity\ListingText(
            [
                'language' => 'ENG',
                'text_type_id' => Traum\Enum\TextTypeId::ARRIVAL_DESCRIPTION,
                'text' => 'an english text',
            ]
        );
        $response = $client->createListingResource()->postText(1, $entity);
        $mock = array_shift($history);

        $this->assertEquals('POST', $mock['request']->getMethod());
        $this->assertEquals('/listing/1/text', $mock['request']->getUri()->getPath());
        compare($entity, $mock['request'], $this);
        compare($response, $mock['response'], $this);
    }

    /**
     * @throws \Traum\Exception\InvalidRequest
     */
    public function testPatchListingText()
    {
        $history = [];
        $client = createClient('patch_listing_text', $history);
        $entity = new Traum\Entity\ListingText(
            [
                'language' => 'ENG',
                'text_type_id' => Traum\Enum\TextTypeId::LISTING_TITLE,
                'text' => 'an english text',
            ]
        );
        $patch = clone $entity;
        $patch->setId(123);
        $response = $client->createListingResource()->patchText(1, $patch);
        $mock = array_shift($history);

        $this->assertEquals('PATCH', $mock['request']->getMethod());
        $this->assertEquals('/listing/1/text/123', $mock['request']->getUri()->getPath());
        compare($entity, $mock['request'], $this);
        compare($response, $mock['response'], $this);
    }

    /**
     * @throws \Traum\Exception\InvalidRequest
     */
    public function testDeleteListingText()
    {
        $history = [];
        $client = createClient('delete_listing_text', $history);
        $entity = new Traum\Entity\ListingText(['id' => '123']);
        $response = $client->createListingResource()->deleteText(1, $entity);
        $mock = array_shift($history);

        $this->assertEquals('DELETE', $mock['request']->getMethod());
        $this->assertEquals('/listing/1/text/123', $mock['request']->getUri()->getPath());
        $this->assertTrue($response);
    }

    /**
     *
     */
    public function testGetListingPictures()
    {
        $history = [];
        $client = createClient('get_listing_pictures', $history);
        $response = $client->createListingResource()->getListingPictures(131237);
        $mock = array_shift($history);

        $fixture = fixture('get_listing_pictures');
        $data = json_decode(current($fixture)['body'], JSON_OBJECT_AS_ARRAY);
        $expected = new \Traum\Entity\ListingPicture($data['_embedded']['picture'][0]);

        $this->assertEquals('GET', $mock['request']->getMethod());
        $this->assertEquals('/listing/131237/picture', $mock['request']->getUri()->getPath());
        $this->assertEquals($expected, $response->current());
    }

    /**
     *
     */
    public function testPostListingPicture()
    {
        $history = [];
        $client = createClient('post_listing_picture', $history);
        $entity = new Traum\Entity\ListingPicture(
            [
                'url' => 'http://ferienhaussizilien.de/resources/rental/entity/241/large_IMG_9114.jpg',
                'category_id' => \Traum\Enum\PictureCategory::OUTDOOR,
                'is_summer_picture' => true,
                'is_winter_picture' => false
            ]
        );
        $response = $client->createListingResource()->postListingPicture(1, $entity);
        $mock = array_shift($history);

        $this->assertEquals('POST', $mock['request']->getMethod());
        $this->assertEquals('/listing/1/picture', $mock['request']->getUri()->getPath());
        compare($entity, $mock['request'], $this);
        compare($response, $mock['response'], $this);
    }

    /**
     * @throws \Traum\Exception\InvalidRequest
     */
    public function testDeleteListingPictures()
    {
        $history = [];
        $client = createClient('delete_listing_pictures', $history);;
        $response = $client->createListingResource()->deleteListingPictures(123);
        $mock = array_shift($history);

        $this->assertEquals('DELETE', $mock['request']->getMethod());
        $this->assertEquals('/listing/123/picture', $mock['request']->getUri()->getPath());
        $this->assertTrue($response);
    }

    /**
     *
     */
    public function testGetListingPictureTitles()
    {
        $history = [];
        $client = createClient('get_listing_picture_titles', $history);
        $response = $client->createListingResource()->getListingPictureTitles(131237, 123456);
        $mock = array_shift($history);

        $fixture = fixture('get_listing_picture_titles');
        $data = json_decode(current($fixture)['body'], JSON_OBJECT_AS_ARRAY);
        $expected = new \Traum\Entity\ListingPictureTitle($data['_embedded']['picture_title'][0]);

        $this->assertEquals('GET', $mock['request']->getMethod());
        $this->assertEquals('/listing/131237/picture/123456/picture-title', $mock['request']->getUri()->getPath());
        $this->assertEquals($expected, $response->current());
    }

    /**
     *
     */
    public function testGetListingPictureTitle()
    {
        $history = [];
        $client = createClient('get_listing_picture_title', $history);
        $response = $client->createListingResource()->getListingPictureTitle(12, 34, 56);
        $mock = array_shift($history);

        $this->assertEquals('GET', $mock['request']->getMethod());
        $this->assertEquals('/listing/12/picture/34/picture-title/56', $mock['request']->getUri()->getPath());
        compare($response, $mock['response'], $this);
    }

    /**
     *
     */
    public function testPatchGetListingPictureTitle()
    {
        $history = [];
        $client = createClient('patch_listing_picture_title', $history);
        $entity = new Traum\Entity\ListingPictureTitle(
            [
                'text' => 'bla',
            ]
        );
        $patch = clone $entity;
        $patch->setId(56);
        $response = $client->createListingResource()->patchListingPictureTitle(12, 34, $patch);
        $mock = array_shift($history);

        $this->assertEquals('PATCH', $mock['request']->getMethod());
        $this->assertEquals('/listing/12/picture/34/picture-title/56', $mock['request']->getUri()->getPath());
        compare($entity, $mock['request'], $this);
        compare($response, $mock['response'], $this);
    }

    /**
     *
     */
    public function testPostListingSuitabilities()
    {
        $history = [];
        $client = createClient('post_listing_suitabilities', $history);

        $suitability = [
            [
                Entity\ListingSuitability::SUITABILITY_ID        => Enum\Suitability::NON_SMOKERS,
                Entity\ListingSuitability::SUITABILITY_STATUS_ID => Enum\SuitabilityStatus::NOT_ALLOWED
            ],
            [
                Entity\ListingSuitability::SUITABILITY_ID        => Enum\Suitability::FAMILIES,
                Entity\ListingSuitability::SUITABILITY_STATUS_ID => Enum\SuitabilityStatus::ALLOWED
            ],
            [
                Entity\ListingSuitability::SUITABILITY_ID        => Enum\Suitability::ALLERGY_SUFFERERS,
                Entity\ListingSuitability::SUITABILITY_STATUS_ID => Enum\SuitabilityStatus::ON_REQUEST
            ],
        ];

        $collection = Entity\ListingSuitabilityCollection::fromArray($suitability);

        $response = $client->createListingResource()->postSuitabilities(1, $collection);
        $mock = array_shift($history);

        $this->assertEquals('POST', $mock['request']->getMethod());
        $this->assertEquals('/listing/1/suitability', $mock['request']->getUri()->getPath());

        compareCollection($response, $mock['response'], $this);
    }
}
