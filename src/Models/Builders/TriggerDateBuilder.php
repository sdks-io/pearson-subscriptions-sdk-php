<?php

declare(strict_types=1);

/*
 * PplusSubscriptionPapiLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PplusSubscriptionPapiLib\Models\Builders;

use Core\Utils\CoreHelper;
use PplusSubscriptionPapiLib\Models\TriggerDate;

/**
 * Builder for model TriggerDate
 *
 * @see TriggerDate
 */
class TriggerDateBuilder
{
    /**
     * @var TriggerDate
     */
    private $instance;

    private function __construct(TriggerDate $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Trigger Date Builder object.
     */
    public static function init(): self
    {
        return new self(new TriggerDate());
    }

    /**
     * Sets name field.
     *
     * @param string|null $value
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets trigger Date field.
     *
     * @param string|null $value
     */
    public function triggerDate(?string $value): self
    {
        $this->instance->setTriggerDate($value);
        return $this;
    }

    /**
     * Initializes a new Trigger Date object.
     */
    public function build(): TriggerDate
    {
        return CoreHelper::clone($this->instance);
    }
}
