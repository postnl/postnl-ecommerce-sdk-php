<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\LabellingCustomerMessage;

/**
 * Builder for model LabellingCustomerMessage
 *
 * @see LabellingCustomerMessage
 */
class LabellingCustomerMessageBuilder
{
    /**
     * @var LabellingCustomerMessage
     */
    private $instance;

    private function __construct(LabellingCustomerMessage $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Labelling Customer Message Builder object.
     *
     * @param string $messageID
     * @param string $messageTimeStamp
     * @param string $printertype
     */
    public static function init(string $messageID, string $messageTimeStamp, string $printertype): self
    {
        return new self(new LabellingCustomerMessage($messageID, $messageTimeStamp, $printertype));
    }

    /**
     * Initializes a new Labelling Customer Message object.
     */
    public function build(): LabellingCustomerMessage
    {
        return CoreHelper::clone($this->instance);
    }
}
