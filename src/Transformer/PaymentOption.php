<?php

namespace Traum\Transformer;

use Traum\Transformer;
use Traum\Entity;

/**
 * Class PaymentOption
 * @package Traum\Transformer
 * @author Oskar Golde <info@oskargolde.de>
 */
final class PaymentOption extends Transformer
{
    /**
     * @param \Traum\Entity\PaymentOption $paymentOption
     * @return array
     */
    public function transform(Entity\PaymentOption $paymentOption)
    {
        $this->addField(
            Entity\PaymentOption::PAYMENT_METHOD_ID,
            $paymentOption->getPaymentMethodId(),
            'int'
        );

        $this->addField(
            Entity\PaymentOption::DEPOSIT,
            $paymentOption->getDeposit(),
            'double'
        );

        $this->addField(
            Entity\PaymentOption::PREPAYMENT_TYPE_ID,
            $paymentOption->getPrepaymentTypeId(),
            'int'
        );

        $this->addField(
            Entity\PaymentOption::PREPAYMENT,
            $paymentOption->getPrepayment(),
            'double'
        );

        $this->addField(
            Entity\PaymentOption::FINAL_PAYMENT_ID,
            $paymentOption->getFinalPaymentId(),
            'int'
        );

        $this->addField(
            Entity\PaymentOption::DEPOSIT_ID,
            $paymentOption->getDepositId(),
            'int'
        );

        return $this->getFields();
    }
}
