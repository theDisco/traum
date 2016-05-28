<?php

namespace Traum\Resource;

use Traum\Entity;
use Traum\Resource;
use Traum\Transformer;

/**
 * Class PaymentOption
 * @package Traum\Resource
 * @author Oskar Golde <info@oskargolde.de>
 */
final class PaymentOption extends Resource
{
    /**
     * @param int $listingId
     * @return \Traum\Entity\PaymentOption
     * @throws \Traum\Exception\InvalidRequest
     */
    public function get($listingId)
    {
        $uri = sprintf('/payment-option/%d', $listingId);
        $body = $this->executeGet($uri);

        return new Entity\PaymentOption($body);
    }

    /**
     * @param int                         $listingId
     * @param \Traum\Entity\PaymentOption $paymentOption
     * @return \Traum\Entity\PaymentOption
     * @throws \Traum\Exception\InvalidRequest
     */
    public function patch($listingId, Entity\PaymentOption $paymentOption)
    {
        $uri = sprintf('/payment-option/%d', $listingId);
        $body = $this->executePatch($uri, $paymentOption, new Transformer\PaymentOption);

        return new Entity\PaymentOption($body);
    }
}
