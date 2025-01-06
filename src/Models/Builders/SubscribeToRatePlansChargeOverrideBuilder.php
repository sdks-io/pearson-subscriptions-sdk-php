<?php

declare(strict_types=1);

/*
 * PplusSubscriptionPapiLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PplusSubscriptionPapiLib\Models\Builders;

use Core\Utils\CoreHelper;
use PplusSubscriptionPapiLib\Models\CustomerFacingCustomFields;
use PplusSubscriptionPapiLib\Models\RatePlanEndDate;
use PplusSubscriptionPapiLib\Models\RatePlanPricing;
use PplusSubscriptionPapiLib\Models\SubscribeToRatePlansChargeOverride;

/**
 * Builder for model SubscribeToRatePlansChargeOverride
 *
 * @see SubscribeToRatePlansChargeOverride
 */
class SubscribeToRatePlansChargeOverrideBuilder
{
    /**
     * @var SubscribeToRatePlansChargeOverride
     */
    private $instance;

    private function __construct(SubscribeToRatePlansChargeOverride $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscribe To Rate Plans Charge Override Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscribeToRatePlansChargeOverride());
    }

    /**
     * Sets product Rate Plan Charge Id field.
     *
     * @param string|null $value
     */
    public function productRatePlanChargeId(?string $value): self
    {
        $this->instance->setProductRatePlanChargeId($value);
        return $this;
    }

    /**
     * Sets customer Facing Custom Fields field.
     *
     * @param CustomerFacingCustomFields|null $value
     */
    public function customerFacingCustomFields(?CustomerFacingCustomFields $value): self
    {
        $this->instance->setCustomerFacingCustomFields($value);
        return $this;
    }

    /**
     * Sets rate Plan Pricing field.
     *
     * @param RatePlanPricing|null $value
     */
    public function ratePlanPricing(?RatePlanPricing $value): self
    {
        $this->instance->setRatePlanPricing($value);
        return $this;
    }

    /**
     * Sets rate Plan End Date field.
     *
     * @param RatePlanEndDate|null $value
     */
    public function ratePlanEndDate(?RatePlanEndDate $value): self
    {
        $this->instance->setRatePlanEndDate($value);
        return $this;
    }

    /**
     * Initializes a new Subscribe To Rate Plans Charge Override object.
     */
    public function build(): SubscribeToRatePlansChargeOverride
    {
        return CoreHelper::clone($this->instance);
    }
}
