<?php

namespace Traum\Transformer;

use Traum\Transformer;
use Traum\Entity;

/**
 * Class Contact
 *
 * @package Traum\Transformer
 * @author  Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class Contact extends Transformer
{
    /**
     * @param \Traum\Entity\Contact $contact
     *
     * @return array
     */
    public function transform(Entity\Contact $contact)
    {
        $this->addField(Entity\Contact::SALUTATION_ID, $contact->getSalutationId(), 'int');
        $this->addField(Entity\Contact::OPERATOR_ID, $contact->getOperatorId(), 'int');
        $this->addField(Entity\Contact::FIRST_NAME, $contact->getFirstName(), 'string');
        $this->addField(Entity\Contact::LAST_NAME, $contact->getLastName(), 'string');
        $this->addField(Entity\Contact::COMPANY, $contact->getCompany(), 'string');
        $this->addField(Entity\Contact::PHONE, $contact->getPhone(), 'string');
        $this->addField(Entity\Contact::ALTERNATIVE_PHONE, $contact->getAlternativePhone(), 'string');
        $this->addField(Entity\Contact::MOBILE, $contact->getMobile(), 'string');
        $this->addField(Entity\Contact::FAX, $contact->getFax(), 'string');
        $this->addField(Entity\Contact::EMAIL, $contact->getEmail(), 'string');
        $this->addField(Entity\Contact::WEBSITE, $contact->getWebsite(), 'string');
        $this->addField(Entity\Contact::SMS, $contact->getSms(), 'string');
        $this->addField(Entity\Contact::SMS_SERVICE, $contact->hasSmsService(), 'bool');

        return $this->getFields();
    }
}
