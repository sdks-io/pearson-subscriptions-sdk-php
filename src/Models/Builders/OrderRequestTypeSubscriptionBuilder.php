<?php

declare(strict_types=1);

/*
 * PearsonSubscriptionsAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PearsonSubscriptionsAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use PearsonSubscriptionsAPILib\Models\CreateOrderOrderAction;
use PearsonSubscriptionsAPILib\Models\OrderRequestTypeSubscription;

/**
 * Builder for model OrderRequestTypeSubscription
 *
 * @see OrderRequestTypeSubscription
 */
class OrderRequestTypeSubscriptionBuilder
{
    /**
     * @var OrderRequestTypeSubscription
     */
    private $instance;

    private function __construct(OrderRequestTypeSubscription $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Order Request Type Subscription Builder object.
     */
    public static function init(): self
    {
        return new self(new OrderRequestTypeSubscription());
    }

    /**
     * Sets order Actions field.
     *
     * @param CreateOrderOrderAction[]|null $value
     */
    public function orderActions(?array $value): self
    {
        $this->instance->setOrderActions($value);
        return $this;
    }

    /**
     * Initializes a new Order Request Type Subscription object.
     */
    public function build(): OrderRequestTypeSubscription
    {
        return CoreHelper::clone($this->instance);
    }
}
