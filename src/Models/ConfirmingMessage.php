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

class ConfirmingMessage implements \JsonSerializable
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
     * @param string $messageID
     * @param string $messageTimeStamp
     */
    public function __construct(string $messageID, string $messageTimeStamp)
    {
        $this->messageID = $messageID;
        $this->messageTimeStamp = $messageTimeStamp;
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
     * Converts the ConfirmingMessage object to a human-readable string representation.
     *
     * @return string The string representation of the ConfirmingMessage object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ConfirmingMessage',
            ['messageID' => $this->messageID, 'messageTimeStamp' => $this->messageTimeStamp]
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

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
