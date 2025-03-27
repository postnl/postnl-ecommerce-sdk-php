<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models;

use PostnlEcommerceLib\ApiHelper;
use stdClass;

class Contact implements \JsonSerializable
{
    /**
     * @var string
     */
    private $contactType;

    /**
     * @var string|null
     */
    private $email;

    /**
     * @var string|null
     */
    private $sMSNr;

    /**
     * @var string|null
     */
    private $telNr;

    /**
     * @param string $contactType
     */
    public function __construct(string $contactType)
    {
        $this->contactType = $contactType;
    }

    /**
     * Returns Contact Type.
     * Type of the contact. This is a code. Please refer to the available [Contact types](https://developer.
     * postnl.nl/docs/#/http/reference-data/reference-codes/contact-types) for the possible values.
     */
    public function getContactType(): string
    {
        return $this->contactType;
    }

    /**
     * Sets Contact Type.
     * Type of the contact. This is a code. Please refer to the available [Contact types](https://developer.
     * postnl.nl/docs/#/http/reference-data/reference-codes/contact-types) for the possible values.
     *
     * @required
     * @maps ContactType
     */
    public function setContactType(string $contactType): void
    {
        $this->contactType = $contactType;
    }

    /**
     * Returns Email.
     * Email address of the contact. Mandatory in some cases. Either the Email or Telnr needs to be filled
     * in for Non EU destinations. Please see [Guidelines](https://developer.postnl.nl/docs/#/http/api-
     * endpoints/send-track/confirming/guidelines).
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Sets Email.
     * Email address of the contact. Mandatory in some cases. Either the Email or Telnr needs to be filled
     * in for Non EU destinations. Please see [Guidelines](https://developer.postnl.nl/docs/#/http/api-
     * endpoints/send-track/confirming/guidelines).
     *
     * @maps Email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * Returns S MS Nr.
     * Mobile phone number of the contact. Mandatory in some cases. Please see [Guidelines](https:
     * //developer.postnl.nl/docs/#/http/api-endpoints/send-track/confirming/guidelines).
     */
    public function getSMSNr(): ?string
    {
        return $this->sMSNr;
    }

    /**
     * Sets S MS Nr.
     * Mobile phone number of the contact. Mandatory in some cases. Please see [Guidelines](https:
     * //developer.postnl.nl/docs/#/http/api-endpoints/send-track/confirming/guidelines).
     *
     * @maps SMSNr
     */
    public function setSMSNr(?string $sMSNr): void
    {
        $this->sMSNr = $sMSNr;
    }

    /**
     * Returns Tel Nr.
     * Phone number of the contact. Either the Email or Telnr needs to be filled in for Non EU destinations.
     * Preferably prefixed with “+” and the international dialling code.
     */
    public function getTelNr(): ?string
    {
        return $this->telNr;
    }

    /**
     * Sets Tel Nr.
     * Phone number of the contact. Either the Email or Telnr needs to be filled in for Non EU destinations.
     * Preferably prefixed with “+” and the international dialling code.
     *
     * @maps TelNr
     */
    public function setTelNr(?string $telNr): void
    {
        $this->telNr = $telNr;
    }

    /**
     * Converts the Contact object to a human-readable string representation.
     *
     * @return string The string representation of the Contact object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Contact',
            [
                'contactType' => $this->contactType,
                'email' => $this->email,
                'sMSNr' => $this->sMSNr,
                'telNr' => $this->telNr
            ]
        );
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['ContactType'] = $this->contactType;
        if (isset($this->email)) {
            $json['Email']   = $this->email;
        }
        if (isset($this->sMSNr)) {
            $json['SMSNr']   = $this->sMSNr;
        }
        if (isset($this->telNr)) {
            $json['TelNr']   = $this->telNr;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
