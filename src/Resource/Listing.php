<?php

namespace Traum\Resource;

use Traum\Entity;
use Traum\Resource;
use Traum\Transformer;

/**
 * Class Listing
 * @package Traum\Resource
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class Listing extends Resource
{
    /**
     * @param int $listingId
     * @return \Traum\Entity\Listing
     * @throws \Traum\Exception\InvalidRequest
     */
    public function get($listingId)
    {
        $uri = sprintf('/listing/%d', $listingId);
        $body = $this->executeGet($uri);

        return new Entity\Listing($body);
    }

    /**
     * @param \Traum\Entity\Listing $listing
     * @return \Traum\Entity\Listing
     * @throws \Traum\Exception\InvalidRequest
     */
    public function patch(Entity\Listing $listing)
    {
        $uri = sprintf('/listing/%d', $listing->getId());
        $body = $this->executePatch($uri, $listing, new Transformer\Listing);

        return new Entity\Listing($body);
    }

    /**
     * @param int $listingId
     * @return \Traum\Entity\ListingTextCollection|\Traum\Entity\ListingText
     * @throws \Traum\Exception\InvalidRequest
     */
    public function getTexts($listingId)
    {
        $uri = sprintf('/listing/%s/text', $listingId);
        $body = $this->executeGet($uri);

        return new Entity\ListingTextCollection($body);
    }

    /**
     * @param int                       $listingId
     * @param \Traum\Entity\ListingText $text
     * @return \Traum\Entity\ListingText
     * @throws \Traum\Exception\InvalidRequest
     */
    public function postText($listingId, Entity\ListingText $text)
    {
        $uri = sprintf('/listing/%d/text', $listingId);
        $body = $this->executePost($uri, $text, new Transformer\ListingText);

        return new Entity\ListingText($body);
    }

    /**
     * @param int                       $listingId
     * @param \Traum\Entity\ListingText $text
     * @return \Traum\Entity\ListingText
     * @throws \Traum\Exception\InvalidRequest
     */
    public function patchText($listingId, Entity\ListingText $text)
    {
        $uri = sprintf('/listing/%d/text/%d', $listingId, $text->getId());
        $body = $this->executePatch($uri, $text, new Transformer\ListingText);

        return new Entity\ListingText($body);
    }

    /**
     * @param int                       $listingId
     * @param \Traum\Entity\ListingText $text
     * @return bool
     * @throws \Traum\Exception\InvalidRequest
     */
    public function deleteText($listingId, Entity\ListingText $text)
    {
        $uri = sprintf('/listing/%d/text/%d', $listingId, $text->getId());
        $response = $this->request('DELETE', $uri);

        return $response->getStatusCode() === 204;
    }

    /**
     * @param int $listingId
     * @return \Traum\Entity\ListingPictureCollection|\Traum\Entity\ListingPicture
     */
    public function getListingPictures($listingId)
    {
        $uri = sprintf('/listing/%d/picture', $listingId);
        $body = $this->executeGet($uri);

        return new Entity\ListingPictureCollection($body);
    }

    /**
     * @param int                          $listingId
     * @param \Traum\Entity\ListingPicture $listingPicture
     * @return \Traum\Entity\ListingPicture
     */
    public function postListingPicture($listingId, Entity\ListingPicture $listingPicture)
    {
        $uri = sprintf('/listing/%d/picture', $listingId);
        $body = $this->executePost($uri, $listingPicture, new Transformer\ListingPicture);

        return new Entity\ListingPicture($body);
    }

    /**
     * @param int $listingId
     * @return bool
     * @throws \Traum\Exception\InvalidRequest
     */
    public function deleteListingPictures($listingId)
    {
        $uri = sprintf('/listing/%d/picture', $listingId);
        $response = $this->request('DELETE', $uri);

        return $response->getStatusCode() === 204;
    }

    /**
     * @param int $listingId
     * @param int $pictureId
     * @return \Traum\Entity\ListingPictureTitleCollection|\Traum\Entity\ListingPictureTitle[]
     */
    public function getListingPictureTitles($listingId, $pictureId)
    {
        $uri = sprintf('/listing/%d/picture/%d/picture-title', $listingId, $pictureId);
        $body = $this->executeGet($uri);

        return new Entity\ListingPictureTitleCollection($body);
    }

    /**
     * @param int $listingId
     * @param int $pictureId
     * @param int $pictureTitleId
     * @return \Traum\Entity\ListingPictureTitle
     */
    public function getListingPictureTitle($listingId, $pictureId, $pictureTitleId)
    {
        $uri = sprintf('/listing/%d/picture/%d/picture-title/%d', $listingId, $pictureId, $pictureTitleId);
        $body = $this->executeGet($uri);

        return new Entity\ListingPictureTitle($body);
    }

    /**
     * @param int                               $listingId
     * @param int                               $pictureId
     * @param \Traum\Entity\ListingPictureTitle $pictureTitle
     * @return \Traum\Entity\ListingPictureTitle
     */
    public function patchListingPictureTitle($listingId, $pictureId, Entity\ListingPictureTitle $pictureTitle)
    {
        $uri = sprintf('/listing/%d/picture/%d/picture-title/%d', $listingId, $pictureId, $pictureTitle->getId());
        $body = $this->executePatch($uri, $pictureTitle, new Transformer\ListingPictureTitle);

        return new Entity\ListingPictureTitle($body);
    }

    /**
     * @param int $listingId
     * @return \Traum\Entity\ListingPriceTableCollection
     */
    public function getPriceTables($listingId)
    {
        $uri = sprintf('/listing/%d/price-table', $listingId);
        $body = $this->executeGet($uri);

        return new Entity\ListingPriceTableCollection($body);
    }

    /**
     * @param int                                       $listingId
     * @param \Traum\Entity\ListingPriceTableCollection $listingPriceTableCollection
     * @return \Traum\Entity\ListingPriceTableCollection
     */
    public function postPriceTables($listingId, Entity\ListingPriceTableCollection $listingPriceTableCollection)
    {
        $uri = sprintf('/listing/%d/price-table', $listingId);
        $body = $this->executePostForCollection($uri, $listingPriceTableCollection, new Transformer\ListingPriceTable);

        return new Entity\ListingPriceTableCollection($body);
    }

    /**
     * @param int                             $listingId
     * @param \Traum\Entity\ListingPriceTable $listingPriceTable
     * @return \Traum\Entity\ListingPriceTable
     */
    public function postPriceTable($listingId, Entity\ListingPriceTable $listingPriceTable)
    {
        $uri = sprintf('/listing/%d/price-table', $listingId);
        $body = $this->executePost($uri, $listingPriceTable, new Transformer\ListingPriceTable);

        return new Entity\ListingPriceTable($body);
    }

    /**
     * @param int $listingId
     * @return bool
     * @throws \Traum\Exception\InvalidRequest
     */
    public function deletePriceTables($listingId)
    {
        $uri = sprintf('/listing/%d/price-table', $listingId);
        $response = $this->request('DELETE', $uri);

        return $response->getStatusCode() === 204;
    }

    /**
     * @param int                                       $listingId
     * @param \Traum\Entity\ListingPriceTableCollection $listingPriceTableCollection
     * @return \Traum\Entity\ListingPriceTableCollection
     */
    public function patchPriceTables($listingId, Entity\ListingPriceTableCollection $listingPriceTableCollection)
    {
        $uri = sprintf('/listing/%d/price-table', $listingId);
        $body = $this->executePatchForCollection($uri, $listingPriceTableCollection, new Transformer\ListingPriceTable);

        return new Entity\ListingPriceTableCollection($body);
    }

    /**
     * @param int                             $listingId
     * @param \Traum\Entity\ListingPriceTable $listingPriceTable
     * @return \Traum\Entity\ListingPriceTable
     */
    public function patchPriceTable($listingId, Entity\ListingPriceTable $listingPriceTable)
    {
        $uri = sprintf('/listing/%d/price-table', $listingId);
        $body = $this->executePatch($uri, $listingPriceTable, new Transformer\ListingPriceTable);

        return new Entity\ListingPriceTableCollection($body);
    }

    /**
     * @param int $listingId
     * @return \Traum\Entity\ListingWeekPriceTableCollection
     */
    public function getWeekPriceTables($listingId)
    {
        $uri = sprintf('/listing/%d/week-price-table', $listingId);
        $body = $this->executeGet($uri);

        return new Entity\ListingWeekPriceTableCollection($body);
    }

    /**
     * @param int $listingId
     * @return bool
     * @throws \Traum\Exception\InvalidRequest
     */
    public function deleteWeekPriceTables($listingId)
    {
        $uri = sprintf('/listing/%d/week-price-table', $listingId);
        $response = $this->request('DELETE', $uri);

        return $response->getStatusCode() === 204;
    }

    /**
     * @param int $listingId
     * @param int $weekPriceTableId
     * @return \Traum\Entity\ListingWeekPriceTable
     */
    public function getWeekPriceTable($listingId, $weekPriceTableId)
    {
        $uri = sprintf('/listing/%d/week-price-table/%d', $listingId, $weekPriceTableId);
        $body = $this->executeGet($uri);

        return new Entity\ListingWeekPriceTable($body);
    }

    /**
     * @param int                                 $listingId
     * @param \Traum\Entity\ListingWeekPriceTable $listingWeekPriceTable
     * @return \Traum\Entity\ListingWeekPriceTable
     */
    public function postWeekPriceTable($listingId, Entity\ListingWeekPriceTable $listingWeekPriceTable)
    {
        $uri = sprintf('/listing/%d/week-price-table', $listingId);
        $body = $this->executePost($uri, $listingWeekPriceTable, new Transformer\ListingWeekPriceTable);

        return new Entity\ListingWeekPriceTable($body);
    }

    /**
     * @param int                                 $listingId
     * @param \Traum\Entity\ListingWeekPriceTable $listingWeekPriceTable
     * @return \Traum\Entity\ListingWeekPriceTable
     */
    public function patchWeekPriceTable($listingId, Entity\ListingWeekPriceTable $listingWeekPriceTable)
    {
        $uri = sprintf('/listing/%d/week-price-table/%d', $listingId, $listingWeekPriceTable->getId());
        $body = $this->executePatch($uri, $listingWeekPriceTable, new Transformer\ListingWeekPriceTable);

        return new Entity\ListingWeekPriceTable($body);
    }

    /**
     * @param int $listingId
     * @param int $weekPriceTableId
     * @return \Traum\Entity\ListingWeekPriceTable
     */
    public function deleteWeekPriceTable($listingId, $weekPriceTableId)
    {
        $uri = sprintf('/listing/%d/week-price-table/%d', $listingId, $weekPriceTableId);
        $response = $this->request('DELETE', $uri);

        return $response->getStatusCode() === 204;
    }

    /**
     * @param int $listingId
     * @return \Traum\Entity\ListingPaymentMethodCollection
     */
    public function getPaymentMethods($listingId)
    {
        $uri = sprintf('/listing/%d/payment-method', $listingId);
        $body = $this->executeGet($uri);

        return new Entity\ListingPaymentMethodCollection($body);
    }

    /**
     * @param int $listingId
     * @return bool
     * @throws \Traum\Exception\InvalidRequest
     */
    public function deletePaymentMethods($listingId)
    {
        $uri = sprintf('/listing/%d/payment-method', $listingId);
        $response = $this->request('DELETE', $uri);

        return $response->getStatusCode() === 204;
    }

    /**
     * @param int                                $listingId
     * @param \Traum\Entity\ListingPaymentMethod $listingPaymentMethod
     * @return \Traum\Entity\ListingPaymentMethod
     */
    public function postPaymentMethod($listingId, Entity\ListingPaymentMethod $listingPaymentMethod)
    {
        $uri = sprintf('/listing/%d/payment-method', $listingId);
        $body = $this->executePost($uri, $listingPaymentMethod, new Transformer\ListingPaymentMethod);

        return new Entity\ListingPaymentMethod($body);
    }

    /**
     * @param int $listingId
     * @param int $paymentMethodId
     * @return bool
     */
    public function deletePaymentMethod($listingId, $paymentMethodId)
    {
        $uri = sprintf('/listing/%d/payment-method/%d', $listingId, $paymentMethodId);
        $response = $this->request('DELETE', $uri);

        return $response->getStatusCode() === 204;
    }

    /**
     * @param int $listingId
     * @return \Traum\Entity\ListingLeisureActivityCollection
     */
    public function getLeisureActivities($listingId)
    {
        $uri = sprintf('/listing/%d/leisure-activity', $listingId);
        $body = $this->executeGet($uri);

        return new Entity\ListingLeisureActivityCollection($body);
    }

    /**
     * @param int                                  $listingId
     * @param \Traum\Entity\ListingLeisureActivity $listingLeisureActivity
     * @return \Traum\Entity\ListingLeisureActivity
     */
    public function postLeisureActivity($listingId, Entity\ListingLeisureActivity $listingLeisureActivity)
    {
        $uri = sprintf('/listing/%d/leisure-activity', $listingId);
        $body = $this->executePost($uri, $listingLeisureActivity, new Transformer\ListingLeisureActivity);

        return new Entity\ListingLeisureActivity($body);
    }

    /**
     * @param int                                            $listingId
     * @param \Traum\Entity\ListingLeisureActivityCollection $listingLeisureActivityCollection
     * @return \Traum\Entity\ListingLeisureActivityCollection
     */
    public function postLeisureActivities(
        $listingId,
        Entity\ListingLeisureActivityCollection $listingLeisureActivityCollection
    ) {
        $uri = sprintf('/listing/%d/leisure-activity', $listingId);
        $body = $this->executePostForCollection(
            $uri,
            $listingLeisureActivityCollection,
            new Transformer\ListingLeisureActivity
        );

        return new Entity\ListingLeisureActivityCollection($body);
    }

    /**
     * @param int $listingId
     * @return bool
     * @throws \Traum\Exception\InvalidRequest
     */
    public function deleteLeisureActivities($listingId)
    {
        $uri = sprintf('/listing/%d/leisure-activity', $listingId);
        $response = $this->request('DELETE', $uri);

        return $response->getStatusCode() === 204;
    }

    /**
     * @param int $listingId
     * @param int $leisureActivityId
     * @return \Traum\Entity\ListingLeisureActivity
     */
    public function getLeisureActivity($listingId, $leisureActivityId)
    {
        $uri = sprintf('/listing/%d/leisure-activity/%d', $listingId, $leisureActivityId);
        $body = $this->executeGet($uri);

        return new Entity\ListingLeisureActivity($body);
    }

    /**
     * @param int $listingId
     * @param int $leisureActivityId
     * @return \Traum\Entity\ListingLeisureActivity
     */
    public function deleteLeisureActivity($listingId, $leisureActivityId)
    {
        $uri = sprintf('/listing/%d/leisure-activity/%d', $listingId, $leisureActivityId);
        $response = $this->request('DELETE', $uri);

        return $response->getStatusCode() === 204;
    }

    /**
     * @param int $listingId
     * @return \Traum\Entity\ListingLanguageCollection
     */
    public function getLanguages($listingId)
    {
        $uri = sprintf('/listing/%d/language', $listingId);
        $body = $this->executeGet($uri);

        return new Entity\ListingLanguageCollection($body);
    }

    /**
     * @param int                           $listingId
     * @param \Traum\Entity\ListingLanguage $listingLanguage
     * @return \Traum\Entity\ListingLanguage
     */
    public function postLanguage($listingId, Entity\ListingLanguage $listingLanguage)
    {
        $uri = sprintf('/listing/%d/language', $listingId);
        $body = $this->executePost($uri, $listingLanguage, new Transformer\ListingLanguage);

        return new Entity\ListingLanguage($body);
    }

    /**
     * @param int $listingId
     * @return bool
     * @throws \Traum\Exception\InvalidRequest
     */
    public function deleteLanguages($listingId)
    {
        $uri = sprintf('/listing/%d/language', $listingId);
        $response = $this->request('DELETE', $uri);

        return $response->getStatusCode() === 204;
    }

    /**
     * @param int $listingId
     * @param int $languageId
     * @return \Traum\Entity\ListingLanguage
     */
    public function getLanguage($listingId, $languageId)
    {
        $uri = sprintf('/listing/%d/language/%d', $listingId, $languageId);
        $body = $this->executeGet($uri);

        return new Entity\ListingLanguage($body);
    }

    /**
     * @param int $listingId
     * @param int $languageId
     * @return \Traum\Entity\ListingLanguage
     */
    public function deleteLanguage($listingId, $languageId)
    {
        $uri = sprintf('/listing/%d/language/%d', $listingId, $languageId);
        $response = $this->request('DELETE', $uri);

        return $response->getStatusCode() === 204;
    }

    /**
     * @param int $listingId
     * @return \Traum\Entity\ListingArrivalCollection
     */
    public function getArrivals($listingId)
    {
        $uri = sprintf('/listing/%d/arrival', $listingId);
        $body = $this->executeGet($uri);

        return new Entity\ListingArrivalCollection($body);
    }

    /**
     * @param int                          $listingId
     * @param \Traum\Entity\ListingArrival $listingArrival
     * @return \Traum\Entity\ListingArrival
     */
    public function postArrival($listingId, Entity\ListingArrival $listingArrival)
    {
        $uri = sprintf('/listing/%d/arrival', $listingId);
        $body = $this->executePost($uri, $listingArrival, new Transformer\ListingArrival);

        return new Entity\ListingArrival($body);
    }

    /**
     * @param int $listingId
     * @return bool
     * @throws \Traum\Exception\InvalidRequest
     */
    public function deleteArrivals($listingId)
    {
        $uri = sprintf('/listing/%d/arrival', $listingId);
        $response = $this->request('DELETE', $uri);

        return $response->getStatusCode() === 204;
    }

    /**
     * @param int $listingId
     * @param int $arrivalId
     * @return \Traum\Entity\ListingArrival
     */
    public function getArrival($listingId, $arrivalId)
    {
        $uri = sprintf('/listing/%d/arrival/%d', $listingId, $arrivalId);
        $body = $this->executeGet($uri);

        return new Entity\ListingArrival($body);
    }

    /**
     * @param int $listingId
     * @param int $arrivalId
     * @return \Traum\Entity\ListingArrival
     */
    public function deleteArrival($listingId, $arrivalId)
    {
        $uri = sprintf('/listing/%d/arrival/%d', $listingId, $arrivalId);
        $response = $this->request('DELETE', $uri);

        return $response->getStatusCode() === 204;
    }

    /**
     * @param int $listingId
     * @return \Traum\Entity\ListingSuitabilityCollection
     */
    public function getSuitabilities($listingId)
    {
        $uri = sprintf('/listing/%d/suitability', $listingId);
        $body = $this->executeGet($uri);

        return new Entity\ListingSuitabilityCollection($body);
    }

    /**
     * @param int                              $listingId
     * @param \Traum\Entity\ListingSuitability $listingSuitability
     * @return \Traum\Entity\ListingSuitability
     */
    public function postSuitability($listingId, Entity\ListingSuitability $listingSuitability)
    {
        $uri = sprintf('/listing/%d/suitability', $listingId);
        $body = $this->executePost($uri, $listingSuitability, new Transformer\ListingSuitability);

        return new Entity\ListingSuitability($body);
    }

    /**
     * @param int                                        $listingId
     * @param \Traum\Entity\ListingSuitabilityCollection $listingSuitabilityCollection
     * @return \Traum\Entity\ListingSuitabilityCollection
     */
    public function postSuitabilities($listingId, Entity\ListingSuitabilityCollection $listingSuitabilityCollection)
    {
        $uri = sprintf('/listing/%d/suitability', $listingId);
        $body = $this->executePostForCollection(
            $uri,
            $listingSuitabilityCollection,
            new Transformer\ListingSuitability
        );

        return new Entity\ListingSuitabilityCollection($body);
    }

    /**
     * @param int                              $listingId
     * @param \Traum\Entity\ListingSuitability $listingSuitability
     * @return \Traum\Entity\ListingSuitability
     */
    public function patchSuitability($listingId, Entity\ListingSuitability $listingSuitability)
    {
        $uri = sprintf('/listing/%d/suitability', $listingId);
        $body = $this->executePatch($uri, $listingSuitability, new Transformer\ListingSuitability);

        return new Entity\ListingSuitability($body);
    }

    /**
     * @param int                                        $listingId
     * @param \Traum\Entity\ListingSuitabilityCollection $listingSuitabilityCollection
     * @return \Traum\Entity\ListingSuitability
     */
    public function patchSuitabilities($listingId, Entity\ListingSuitabilityCollection $listingSuitabilityCollection)
    {
        $uri = sprintf('/listing/%d/suitability', $listingId);
        $body = $this->executePatchForCollection(
            $uri,
            $listingSuitabilityCollection,
            new Transformer\ListingSuitabilityForPatch
        );

        return new Entity\ListingSuitabilityCollection($body);
    }

    /**
     * @param int $listingId
     * @param int $suitabilityId
     * @return \Traum\Entity\ListingSuitability
     */
    public function getSuitability($listingId, $suitabilityId)
    {
        $uri = sprintf('/listing/%d/suitability/%d', $listingId, $suitabilityId);
        $body = $this->executeGet($uri);

        return new Entity\ListingSuitability($body);
    }
}
