<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\Contact;

/**
 * Builder for model Contact
 *
 * @see Contact
 */
class ContactBuilder
{
    /**
     * @var Contact
     */
    private $instance;

    private function __construct(Contact $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Contact Builder object.
     *
     * @param string $contactType
     */
    public static function init(string $contactType): self
    {
        return new self(new Contact($contactType));
    }

    /**
     * Sets Email field.
     *
     * @param string|null $value
     */
    public function email(?string $value): self
    {
        $this->instance->setEmail($value);
        return $this;
    }

    /**
     * Sets SMS Nr field.
     *
     * @param string|null $value
     */
    public function sMSNr(?string $value): self
    {
        $this->instance->setSMSNr($value);
        return $this;
    }

    /**
     * Sets Tel Nr field.
     *
     * @param string|null $value
     */
    public function telNr(?string $value): self
    {
        $this->instance->setTelNr($value);
        return $this;
    }

    /**
     * Initializes a new Contact object.
     */
    public function build(): Contact
    {
        return CoreHelper::clone($this->instance);
    }
}
