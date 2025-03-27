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

class LabellingCustomerMessage implements \JsonSerializable
{
    /**
     * @var string
     */
    private $messageID;

    /**
     * @var string
     */
    private $messageTimeStamp;

    /**
     * @var string
     */
    private $printertype;

    /**
     * @param string $messageID
     * @param string $messageTimeStamp
     * @param string $printertype
     */
    public function __construct(string $messageID, string $messageTimeStamp, string $printertype)
    {
        $this->messageID = $messageID;
        $this->messageTimeStamp = $messageTimeStamp;
        $this->printertype = $printertype;
    }

    /**
     * Returns Message ID.
     * ID of the message
     */
    public function getMessageID(): string
    {
        return $this->messageID;
    }

    /**
     * Sets Message ID.
     * ID of the message
     *
     * @required
     * @maps MessageID
     */
    public function setMessageID(string $messageID): void
    {
        $this->messageID = $messageID;
    }

    /**
     * Returns Message Time Stamp.
     * Date/time of sending the message. Format: dd-mm-yyyy hh:mm:ss
     */
    public function getMessageTimeStamp(): string
    {
        return $this->messageTimeStamp;
    }

    /**
     * Sets Message Time Stamp.
     * Date/time of sending the message. Format: dd-mm-yyyy hh:mm:ss
     *
     * @required
     * @maps MessageTimeStamp
     */
    public function setMessageTimeStamp(string $messageTimeStamp): void
    {
        $this->messageTimeStamp = $messageTimeStamp;
    }

    /**
     * Returns Printertype.
     * Printer type that will be used to process the label, e.g. Zebra printer or PDF See [Printer
     * types](https://developer.postnl.nl/docs/#/http/reference-data/reference-codes/printer-types) for the
     * available printer types.
     */
    public function getPrintertype(): string
    {
        return $this->printertype;
    }

    /**
     * Sets Printertype.
     * Printer type that will be used to process the label, e.g. Zebra printer or PDF See [Printer
     * types](https://developer.postnl.nl/docs/#/http/reference-data/reference-codes/printer-types) for the
     * available printer types.
     *
     * @required
     * @maps Printertype
     */
    public function setPrintertype(string $printertype): void
    {
        $this->printertype = $printertype;
    }

    /**
     * Converts the LabellingCustomerMessage object to a human-readable string representation.
     *
     * @return string The string representation of the LabellingCustomerMessage object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'LabellingCustomerMessage',
            [
                'messageID' => $this->messageID,
                'messageTimeStamp' => $this->messageTimeStamp,
                'printertype' => $this->printertype
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
        $json['MessageID']        = $this->messageID;
        $json['MessageTimeStamp'] = $this->messageTimeStamp;
        $json['Printertype']      = $this->printertype;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
