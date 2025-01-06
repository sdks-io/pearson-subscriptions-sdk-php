<?php

declare(strict_types=1);

/*
 * PplusSubscriptionPapiLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PplusSubscriptionPapiLib\Models;

use PplusSubscriptionPapiLib\ApiHelper;
use stdClass;

/**
 * Invoice or Payment.
 */
class OrderRequestProcessingOptions implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $runBilling;

    /**
     * @var BillingOptions|null
     */
    private $billingOptions;

    /**
     * @var bool|null
     */
    private $collectPayment;

    /**
     * Returns Run Billing.
     * Indicates if the current request needs to generate an invoice. The invoice will be generated against
     * all subscriptions included in this order. For REDEMPTION, default it to true.
     */
    public function getRunBilling(): ?bool
    {
        return $this->runBilling;
    }

    /**
     * Sets Run Billing.
     * Indicates if the current request needs to generate an invoice. The invoice will be generated against
     * all subscriptions included in this order. For REDEMPTION, default it to true.
     *
     * @maps runBilling
     */
    public function setRunBilling(?bool $runBilling): void
    {
        $this->runBilling = $runBilling;
    }

    /**
     * Returns Billing Options.
     */
    public function getBillingOptions(): ?BillingOptions
    {
        return $this->billingOptions;
    }

    /**
     * Sets Billing Options.
     *
     * @maps billingOptions
     */
    public function setBillingOptions(?BillingOptions $billingOptions): void
    {
        $this->billingOptions = $billingOptions;
    }

    /**
     * Returns Collect Payment.
     * Indicates if the current request needs to collect payments. This value can not be 'true' when
     * 'runBilling' flag is 'false'.
     */
    public function getCollectPayment(): ?bool
    {
        return $this->collectPayment;
    }

    /**
     * Sets Collect Payment.
     * Indicates if the current request needs to collect payments. This value can not be 'true' when
     * 'runBilling' flag is 'false'.
     *
     * @maps collectPayment
     */
    public function setCollectPayment(?bool $collectPayment): void
    {
        $this->collectPayment = $collectPayment;
    }

    /**
     * Converts the OrderRequestProcessingOptions object to a human-readable string representation.
     *
     * @return string The string representation of the OrderRequestProcessingOptions object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'OrderRequestProcessingOptions',
            [
                'runBilling' => $this->runBilling,
                'billingOptions' => $this->billingOptions,
                'collectPayment' => $this->collectPayment
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
        if (isset($this->runBilling)) {
            $json['runBilling']     = $this->runBilling;
        }
        if (isset($this->billingOptions)) {
            $json['billingOptions'] = $this->billingOptions;
        }
        if (isset($this->collectPayment)) {
            $json['collectPayment'] = $this->collectPayment;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
