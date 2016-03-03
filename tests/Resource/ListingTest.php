<?php

class ListingTest extends \PHPUnit_Framework_TestCase
{
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
}
