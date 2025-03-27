<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\Group;

/**
 * Builder for model Group
 *
 * @see Group
 */
class GroupBuilder
{
    /**
     * @var Group
     */
    private $instance;

    private function __construct(Group $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Group Builder object.
     *
     * @param string $groupType
     * @param string $mainBarcode
     */
    public static function init(string $groupType, string $mainBarcode): self
    {
        return new self(new Group($groupType, $mainBarcode));
    }

    /**
     * Sets Group Sequence field.
     *
     * @param int|null $value
     */
    public function groupSequence(?int $value): self
    {
        $this->instance->setGroupSequence($value);
        return $this;
    }

    /**
     * Sets Group Count field.
     *
     * @param int|null $value
     */
    public function groupCount(?int $value): self
    {
        $this->instance->setGroupCount($value);
        return $this;
    }

    /**
     * Initializes a new Group object.
     */
    public function build(): Group
    {
        return CoreHelper::clone($this->instance);
    }
}
