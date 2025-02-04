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

class CustomField implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $value;

    /**
     * Returns Name.
     * Custom field name defined for future use
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * Custom field name defined for future use
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Value.
     * Custom field value for future use.  paymentMethod__c is Payment Gateway PayPal or CyberSource or
     * REDEMPTION; paymentToken__c is PayPal or CyberSource token.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Sets Value.
     * Custom field value for future use.  paymentMethod__c is Payment Gateway PayPal or CyberSource or
     * REDEMPTION; paymentToken__c is PayPal or CyberSource token.
     *
     * @maps value
     */
    public function setValue(?string $value): void
    {
        $this->value = $value;
    }

    /**
     * Converts the CustomField object to a human-readable string representation.
     *
     * @return string The string representation of the CustomField object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('CustomField', ['name' => $this->name, 'value' => $this->value]);
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
        if (isset($this->name)) {
            $json['name']  = $this->name;
        }
        if (isset($this->value)) {
            $json['value'] = $this->value;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
