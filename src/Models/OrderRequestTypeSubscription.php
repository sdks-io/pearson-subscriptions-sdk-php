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

class OrderRequestTypeSubscription implements \JsonSerializable
{
    /**
     * @var CreateOrderOrderAction[]|null
     */
    private $orderActions;

    /**
     * Returns Order Actions.
     * The actions to be applied to the subscription. Order actions will be stored with the sequence when
     * it was provided in the request.
     *
     * @return CreateOrderOrderAction[]|null
     */
    public function getOrderActions(): ?array
    {
        return $this->orderActions;
    }

    /**
     * Sets Order Actions.
     * The actions to be applied to the subscription. Order actions will be stored with the sequence when
     * it was provided in the request.
     *
     * @maps orderActions
     *
     * @param CreateOrderOrderAction[]|null $orderActions
     */
    public function setOrderActions(?array $orderActions): void
    {
        $this->orderActions = $orderActions;
    }

    /**
     * Converts the OrderRequestTypeSubscription object to a human-readable string representation.
     *
     * @return string The string representation of the OrderRequestTypeSubscription object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('OrderRequestTypeSubscription', ['orderActions' => $this->orderActions]);
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
        if (isset($this->orderActions)) {
            $json['orderActions'] = $this->orderActions;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
