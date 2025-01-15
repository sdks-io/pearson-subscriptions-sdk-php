<?php

declare(strict_types=1);

/*
 * PearsonSubscriptionsAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PearsonSubscriptionsAPILib\Models;

use PearsonSubscriptionsAPILib\ApiHelper;
use stdClass;

class SubscribeToRatePlansChargeOverride implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $productRatePlanChargeId;

    /**
     * @var CustomerFacingCustomFields|null
     */
    private $customerFacingCustomFields;

    /**
     * @var RatePlanPricing|null
     */
    private $ratePlanPricing;

    /**
     * @var RatePlanEndDate|null
     */
    private $ratePlanEndDate;

    /**
     * Returns Product Rate Plan Charge Id.
     * This is unique rate plan charge id respective to rate plan id. It signifies the subscription type,
     * entitlementLevel,maxEntitlements,numEntitlements etc.
     */
    public function getProductRatePlanChargeId(): ?string
    {
        return $this->productRatePlanChargeId;
    }

    /**
     * Sets Product Rate Plan Charge Id.
     * This is unique rate plan charge id respective to rate plan id. It signifies the subscription type,
     * entitlementLevel,maxEntitlements,numEntitlements etc.
     *
     * @maps productRatePlanChargeId
     */
    public function setProductRatePlanChargeId(?string $productRatePlanChargeId): void
    {
        $this->productRatePlanChargeId = $productRatePlanChargeId;
    }

    /**
     * Returns Customer Facing Custom Fields.
     */
    public function getCustomerFacingCustomFields(): ?CustomerFacingCustomFields
    {
        return $this->customerFacingCustomFields;
    }

    /**
     * Sets Customer Facing Custom Fields.
     *
     * @maps customerFacingCustomFields
     */
    public function setCustomerFacingCustomFields(?CustomerFacingCustomFields $customerFacingCustomFields): void
    {
        $this->customerFacingCustomFields = $customerFacingCustomFields;
    }

    /**
     * Returns Rate Plan Pricing.
     */
    public function getRatePlanPricing(): ?RatePlanPricing
    {
        return $this->ratePlanPricing;
    }

    /**
     * Sets Rate Plan Pricing.
     *
     * @maps ratePlanPricing
     */
    public function setRatePlanPricing(?RatePlanPricing $ratePlanPricing): void
    {
        $this->ratePlanPricing = $ratePlanPricing;
    }

    /**
     * Returns Rate Plan End Date.
     */
    public function getRatePlanEndDate(): ?RatePlanEndDate
    {
        return $this->ratePlanEndDate;
    }

    /**
     * Sets Rate Plan End Date.
     *
     * @maps ratePlanEndDate
     */
    public function setRatePlanEndDate(?RatePlanEndDate $ratePlanEndDate): void
    {
        $this->ratePlanEndDate = $ratePlanEndDate;
    }

    /**
     * Converts the SubscribeToRatePlansChargeOverride object to a human-readable string representation.
     *
     * @return string The string representation of the SubscribeToRatePlansChargeOverride object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SubscribeToRatePlansChargeOverride',
            [
                'productRatePlanChargeId' => $this->productRatePlanChargeId,
                'customerFacingCustomFields' => $this->customerFacingCustomFields,
                'ratePlanPricing' => $this->ratePlanPricing,
                'ratePlanEndDate' => $this->ratePlanEndDate
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
        if (isset($this->productRatePlanChargeId)) {
            $json['productRatePlanChargeId']    = $this->productRatePlanChargeId;
        }
        if (isset($this->customerFacingCustomFields)) {
            $json['customerFacingCustomFields'] = $this->customerFacingCustomFields;
        }
        if (isset($this->ratePlanPricing)) {
            $json['ratePlanPricing']            = $this->ratePlanPricing;
        }
        if (isset($this->ratePlanEndDate)) {
            $json['ratePlanEndDate']            = $this->ratePlanEndDate;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
