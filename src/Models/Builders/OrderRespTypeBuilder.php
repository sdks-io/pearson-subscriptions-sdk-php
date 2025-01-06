<?php

declare(strict_types=1);

/*
 * PplusSubscriptionPapiLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PplusSubscriptionPapiLib\Models\Builders;

use Core\Utils\CoreHelper;
use PplusSubscriptionPapiLib\Models\OrderRespType;

/**
 * Builder for model OrderRespType
 *
 * @see OrderRespType
 */
class OrderRespTypeBuilder
{
    /**
     * @var OrderRespType
     */
    private $instance;

    private function __construct(OrderRespType $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Order Resp Type Builder object.
     */
    public static function init(): self
    {
        return new self(new OrderRespType());
    }

    /**
     * Sets message field.
     *
     * @param string|null $value
     */
    public function message(?string $value): self
    {
        $this->instance->setMessage($value);
        return $this;
    }

    /**
     * Sets order Number field.
     *
     * @param string|null $value
     */
    public function orderNumber(?string $value): self
    {
        $this->instance->setOrderNumber($value);
        return $this;
    }

    /**
     * Sets subscription Number field.
     *
     * @param string|null $value
     */
    public function subscriptionNumber(?string $value): self
    {
        $this->instance->setSubscriptionNumber($value);
        return $this;
    }

    /**
     * Initializes a new Order Resp Type object.
     */
    public function build(): OrderRespType
    {
        return CoreHelper::clone($this->instance);
    }
}
