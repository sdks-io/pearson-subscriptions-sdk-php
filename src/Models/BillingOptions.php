<?php

declare(strict_types=1);

/*
 * PearsonSubscriptionsAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PearsonSubscriptionsAPILib\Models;

use PearsonSubscriptionsAPILib\ApiHelper;
use PearsonSubscriptionsAPILib\Utils\DateTimeHelper;
use stdClass;

class BillingOptions implements \JsonSerializable
{
    /**
     * @var \DateTime|null
     */
    private $documentDate;

    /**
     * @var \DateTime|null
     */
    private $targetDate;

    /**
     * Returns Document Date.
     */
    public function getDocumentDate(): ?\DateTime
    {
        return $this->documentDate;
    }

    /**
     * Sets Document Date.
     *
     * @maps documentDate
     * @factory \PearsonSubscriptionsAPILib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setDocumentDate(?\DateTime $documentDate): void
    {
        $this->documentDate = $documentDate;
    }

    /**
     * Returns Target Date.
     * For REDEMPTION, it is end of term date
     */
    public function getTargetDate(): ?\DateTime
    {
        return $this->targetDate;
    }

    /**
     * Sets Target Date.
     * For REDEMPTION, it is end of term date
     *
     * @maps targetDate
     * @factory \PearsonSubscriptionsAPILib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setTargetDate(?\DateTime $targetDate): void
    {
        $this->targetDate = $targetDate;
    }

    /**
     * Converts the BillingOptions object to a human-readable string representation.
     *
     * @return string The string representation of the BillingOptions object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'BillingOptions',
            ['documentDate' => $this->documentDate, 'targetDate' => $this->targetDate]
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
        if (isset($this->documentDate)) {
            $json['documentDate'] = DateTimeHelper::toSimpleDate($this->documentDate);
        }
        if (isset($this->targetDate)) {
            $json['targetDate']   = DateTimeHelper::toSimpleDate($this->targetDate);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
