<?php

declare(strict_types=1);

/*
 * PearsonSubscriptionsAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PearsonSubscriptionsAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use PearsonSubscriptionsAPILib\Models\AddProduct;
use PearsonSubscriptionsAPILib\Models\UpdateOrAddProductChargeOverride;

/**
 * Builder for model AddProduct
 *
 * @see AddProduct
 */
class AddProductBuilder
{
    /**
     * @var AddProduct
     */
    private $instance;

    private function __construct(AddProduct $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Add Product Builder object.
     */
    public static function init(): self
    {
        return new self(new AddProduct());
    }

    /**
     * Sets product Rate Plan Id field.
     *
     * @param string|null $value
     */
    public function productRatePlanId(?string $value): self
    {
        $this->instance->setProductRatePlanId($value);
        return $this;
    }

    /**
     * Sets update Or Add Product Charge Overrides field.
     *
     * @param UpdateOrAddProductChargeOverride[]|null $value
     */
    public function updateOrAddProductChargeOverrides(?array $value): self
    {
        $this->instance->setUpdateOrAddProductChargeOverrides($value);
        return $this;
    }

    /**
     * Initializes a new Add Product object.
     */
    public function build(): AddProduct
    {
        return CoreHelper::clone($this->instance);
    }
}
