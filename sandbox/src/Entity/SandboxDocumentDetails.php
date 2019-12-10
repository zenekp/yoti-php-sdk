<?php

namespace YotiSandbox\Entity;

use Yoti\Entity\DocumentDetails;

class SandboxDocumentDetails extends DocumentDetails
{
    public function getValue()
    {
        $value = $this->getType() . ' ' . $this->getIssuingCountry() . ' ' . $this->getDocumentNumber() . ' ';

        $expirationDate = $this->getExpirationDate();
        $value .= (null !== $expirationDate) ? $expirationDate->format('d-m-Y') : '-';
        $value .= (null !== $this->getIssuingAuthority()) ? ' ' . $this->getIssuingAuthority() : '';

        return $value;
    }
}
