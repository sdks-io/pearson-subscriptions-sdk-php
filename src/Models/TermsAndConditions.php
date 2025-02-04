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

/**
 * change the terms and conditions of a subscription .
 */
class TermsAndConditions implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $autorenew;

    /**
     * Returns Autorenew.
     * autorenew flag
     */
    public function getAutorenew(): ?bool
    {
        return $this->autorenew;
    }

    /**
     * Sets Autorenew.
     * autorenew flag
     *
     * @maps autorenew
     */
    public function setAutorenew(?bool $autorenew): void
    {
        $this->autorenew = $autorenew;
    }

    /**
     * Converts the TermsAndConditions object to a human-readable string representation.
     *
     * @return string The string representation of the TermsAndConditions object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('TermsAndConditions', ['autorenew' => $this->autorenew]);
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
        if (isset($this->autorenew)) {
            $json['autorenew'] = $this->autorenew;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
