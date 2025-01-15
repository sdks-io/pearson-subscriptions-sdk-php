<?php

declare(strict_types=1);

/*
 * PearsonSubscriptionsAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PearsonSubscriptionsAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use PearsonSubscriptionsAPILib\Models\Product;

/**
 * Builder for model Product
 *
 * @see Product
 */
class ProductBuilder
{
    /**
     * @var Product
     */
    private $instance;

    private function __construct(Product $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Product Builder object.
     */
    public static function init(): self
    {
        return new self(new Product());
    }

    /**
     * Sets isbn field.
     *
     * @param string|null $value
     */
    public function isbn(?string $value): self
    {
        $this->instance->setIsbn($value);
        return $this;
    }

    /**
     * Sets ppid field.
     *
     * @param string|null $value
     */
    public function ppid(?string $value): self
    {
        $this->instance->setPpid($value);
        return $this;
    }

    /**
     * Sets duration field.
     *
     * @param float|null $value
     */
    public function duration(?float $value): self
    {
        $this->instance->setDuration($value);
        return $this;
    }

    /**
     * Sets end Date field.
     *
     * @param string|null $value
     */
    public function endDate(?string $value): self
    {
        $this->instance->setEndDate($value);
        return $this;
    }

    /**
     * Sets tax field.
     *
     * @param float|null $value
     */
    public function tax(?float $value): self
    {
        $this->instance->setTax($value);
        return $this;
    }

    /**
     * Sets price field.
     *
     * @param float|null $value
     */
    public function price(?float $value): self
    {
        $this->instance->setPrice($value);
        return $this;
    }

    /**
     * Initializes a new Product object.
     */
    public function build(): Product
    {
        return CoreHelper::clone($this->instance);
    }
}
