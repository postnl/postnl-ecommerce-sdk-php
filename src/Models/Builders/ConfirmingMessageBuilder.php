<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\ConfirmingMessage;

/**
 * Builder for model ConfirmingMessage
 *
 * @see ConfirmingMessage
 */
class ConfirmingMessageBuilder
{
    /**
     * @var ConfirmingMessage
     */
    private $instance;

    private function __construct(ConfirmingMessage $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Confirming Message Builder object.
     *
     * @param string $messageID
     * @param string $messageTimeStamp
     */
    public static function init(string $messageID, string $messageTimeStamp): self
    {
        return new self(new ConfirmingMessage($messageID, $messageTimeStamp));
    }

    /**
     * Initializes a new Confirming Message object.
     */
    public function build(): ConfirmingMessage
    {
        return CoreHelper::clone($this->instance);
    }
}
