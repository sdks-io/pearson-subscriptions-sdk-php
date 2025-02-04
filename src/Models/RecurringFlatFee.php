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

class RecurringFlatFee implements \JsonSerializable
{
    /**
     * @var float|null
     */
    private $listPrice;

    /**
     * Returns List Price.
     * Only applicable for REDEMPTION to pass another price in addition to product price.
     */
    public function getListPrice(): ?float
    {
        return $this->listPrice;
    }

    /**
     * Sets List Price.
     * Only applicable for REDEMPTION to pass another price in addition to product price.
     *
     * @maps listPrice
     */
    public function setListPrice(?float $listPrice): void
    {
        $this->listPrice = $listPrice;
    }

    /**
     * Converts the RecurringFlatFee object to a human-readable string representation.
     *
     * @return string The string representation of the RecurringFlatFee object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('RecurringFlatFee', ['listPrice' => $this->listPrice]);
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
        if (isset($this->listPrice)) {
            $json['listPrice'] = $this->listPrice;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
