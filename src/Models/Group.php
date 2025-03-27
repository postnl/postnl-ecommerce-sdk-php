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

class Group implements \JsonSerializable
{
    /**
     * @var string
     */
    private $groupType;

    /**
     * @var int|null
     */
    private $groupSequence;

    /**
     * @var int|null
     */
    private $groupCount;

    /**
     * @var string
     */
    private $mainBarcode;

    /**
     * @param string $groupType
     * @param string $mainBarcode
     */
    public function __construct(string $groupType, string $mainBarcode)
    {
        $this->groupType = $groupType;
        $this->mainBarcode = $mainBarcode;
    }

    /**
     * Returns Group Type.
     * Group sort that determines the type of group that is indicated. This is a code. For possible values,
     * please see [here](https://developer.postnl.nl/docs/#/http/reference-data/reference-codes/group-
     * types)
     */
    public function getGroupType(): string
    {
        return $this->groupType;
    }

    /**
     * Sets Group Type.
     * Group sort that determines the type of group that is indicated. This is a code. For possible values,
     * please see [here](https://developer.postnl.nl/docs/#/http/reference-data/reference-codes/group-
     * types)
     *
     * @required
     * @maps GroupType
     */
    public function setGroupType(string $groupType): void
    {
        $this->groupType = $groupType;
    }

    /**
     * Returns Group Sequence.
     * Sequence number of the collo within the complete shipment (e.g. collo 2 of 4) Mandatory for
     * multicollo shipments
     */
    public function getGroupSequence(): ?int
    {
        return $this->groupSequence;
    }

    /**
     * Sets Group Sequence.
     * Sequence number of the collo within the complete shipment (e.g. collo 2 of 4) Mandatory for
     * multicollo shipments
     *
     * @maps GroupSequence
     */
    public function setGroupSequence(?int $groupSequence): void
    {
        $this->groupSequence = $groupSequence;
    }

    /**
     * Returns Group Count.
     * Total number of colli in the shipment (in case of multicolli shipments) Mandatory for multicollo
     * shipments
     */
    public function getGroupCount(): ?int
    {
        return $this->groupCount;
    }

    /**
     * Sets Group Count.
     * Total number of colli in the shipment (in case of multicolli shipments) Mandatory for multicollo
     * shipments
     *
     * @maps GroupCount
     */
    public function setGroupCount(?int $groupCount): void
    {
        $this->groupCount = $groupCount;
    }

    /**
     * Returns Main Barcode.
     * Main barcode for the shipment (in case of multicolli shipments) Mandatory for multicollo shipments
     */
    public function getMainBarcode(): string
    {
        return $this->mainBarcode;
    }

    /**
     * Sets Main Barcode.
     * Main barcode for the shipment (in case of multicolli shipments) Mandatory for multicollo shipments
     *
     * @required
     * @maps MainBarcode
     */
    public function setMainBarcode(string $mainBarcode): void
    {
        $this->mainBarcode = $mainBarcode;
    }

    /**
     * Converts the Group object to a human-readable string representation.
     *
     * @return string The string representation of the Group object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Group',
            [
                'groupType' => $this->groupType,
                'groupSequence' => $this->groupSequence,
                'groupCount' => $this->groupCount,
                'mainBarcode' => $this->mainBarcode
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
        $json['GroupType']         = $this->groupType;
        if (isset($this->groupSequence)) {
            $json['GroupSequence'] = $this->groupSequence;
        }
        if (isset($this->groupCount)) {
            $json['GroupCount']    = $this->groupCount;
        }
        $json['MainBarcode']       = $this->mainBarcode;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
