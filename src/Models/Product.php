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

class Product implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $isbn;

    /**
     * @var string|null
     */
    private $ppid;

    /**
     * @var float|null
     */
    private $duration;

    /**
     * @var string|null
     */
    private $endDate;

    /**
     * @var float|null
     */
    private $tax;

    /**
     * @var float|null
     */
    private $price;

    /**
     * Returns Isbn.
     * product isbn number
     */
    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    /**
     * Sets Isbn.
     * product isbn number
     *
     * @maps isbn
     */
    public function setIsbn(?string $isbn): void
    {
        $this->isbn = $isbn;
    }

    /**
     * Returns Ppid.
     * product ppid number
     */
    public function getPpid(): ?string
    {
        return $this->ppid;
    }

    /**
     * Sets Ppid.
     * product ppid number
     *
     * @maps ppid
     */
    public function setPpid(?string $ppid): void
    {
        $this->ppid = $ppid;
    }

    /**
     * Returns Duration.
     * Duration of the entitlement in days for this product
     */
    public function getDuration(): ?float
    {
        return $this->duration;
    }

    /**
     * Sets Duration.
     * Duration of the entitlement in days for this product
     *
     * @maps duration
     */
    public function setDuration(?float $duration): void
    {
        $this->duration = $duration;
    }

    /**
     * Returns End Date.
     * end date for the entitlement. in yyyy-MM-dd'T'HH:mm:ss.SSSZ format.
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }

    /**
     * Sets End Date.
     * end date for the entitlement. in yyyy-MM-dd'T'HH:mm:ss.SSSZ format.
     *
     * @maps endDate
     */
    public function setEndDate(?string $endDate): void
    {
        $this->endDate = $endDate;
    }

    /**
     * Returns Tax.
     * Cost of tax on the product
     */
    public function getTax(): ?float
    {
        return $this->tax;
    }

    /**
     * Sets Tax.
     * Cost of tax on the product
     *
     * @maps tax
     */
    public function setTax(?float $tax): void
    {
        $this->tax = $tax;
    }

    /**
     * Returns Price.
     * Cost of the product
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * Sets Price.
     * Cost of the product
     *
     * @maps price
     */
    public function setPrice(?float $price): void
    {
        $this->price = $price;
    }

    /**
     * Converts the Product object to a human-readable string representation.
     *
     * @return string The string representation of the Product object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Product',
            [
                'isbn' => $this->isbn,
                'ppid' => $this->ppid,
                'duration' => $this->duration,
                'endDate' => $this->endDate,
                'tax' => $this->tax,
                'price' => $this->price
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
        if (isset($this->isbn)) {
            $json['isbn']     = $this->isbn;
        }
        if (isset($this->ppid)) {
            $json['ppid']     = $this->ppid;
        }
        if (isset($this->duration)) {
            $json['duration'] = $this->duration;
        }
        if (isset($this->endDate)) {
            $json['endDate']  = $this->endDate;
        }
        if (isset($this->tax)) {
            $json['tax']      = $this->tax;
        }
        if (isset($this->price)) {
            $json['price']    = $this->price;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
