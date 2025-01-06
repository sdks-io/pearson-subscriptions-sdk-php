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

class UpdateSubscription implements \JsonSerializable
{
    /**
     * @var string
     */
    private $orderType;

    /**
     * @var string|null
     */
    private $orderNumber;

    /**
     * @var string|null
     */
    private $orderDate;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string|null
     */
    private $existingAccountNumber;

    /**
     * @var Account|null
     */
    private $account;

    /**
     * @var UpdateSubscriptionSubscription[]|null
     */
    private $updateSubscriptionSubscriptions;

    /**
     * @var UpdateSubscriptionProcessingOptions|null
     */
    private $updateSubscriptionProcessingOptions;

    /**
     * @var Product[]|null
     */
    private $updateSubscriptionProducts;

    /**
     * @var CustomField[]|null
     */
    private $customFields;

    /**
     * @var array|null
     */
    private $paymentCapture;

    /**
     * @param string $orderType
     */
    public function __construct(string $orderType)
    {
        $this->orderType = $orderType;
    }

    /**
     * Returns Order Type.
     * Order Type .
     */
    public function getOrderType(): string
    {
        return $this->orderType;
    }

    /**
     * Sets Order Type.
     * Order Type .
     *
     * @required
     * @maps orderType
     * @factory \PplusSubscriptionPapiLib\Models\OrderTypeEnum::checkValue
     */
    public function setOrderType(string $orderType): void
    {
        $this->orderType = $orderType;
    }

    /**
     * Returns Order Number.
     * Hybris Order Number.
     */
    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    /**
     * Sets Order Number.
     * Hybris Order Number.
     *
     * @maps orderNumber
     */
    public function setOrderNumber(?string $orderNumber): void
    {
        $this->orderNumber = $orderNumber;
    }

    /**
     * Returns Order Date.
     * The date when the order is signed. All the order actions under this order will use this order date
     * as the contract effective date if the contract effective date field is skipped or its value is left
     * as null.
     */
    public function getOrderDate(): ?string
    {
        return $this->orderDate;
    }

    /**
     * Sets Order Date.
     * The date when the order is signed. All the order actions under this order will use this order date
     * as the contract effective date if the contract effective date field is skipped or its value is left
     * as null.
     *
     * @maps orderDate
     */
    public function setOrderDate(?string $orderDate): void
    {
        $this->orderDate = $orderDate;
    }

    /**
     * Returns Description.
     * A description of the order.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * A description of the order.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Existing Account Number.
     * The account number that this order will be created under. It can be either the accountNumber or the
     * account info provided.
     */
    public function getExistingAccountNumber(): ?string
    {
        return $this->existingAccountNumber;
    }

    /**
     * Sets Existing Account Number.
     * The account number that this order will be created under. It can be either the accountNumber or the
     * account info provided.
     *
     * @maps existingAccountNumber
     */
    public function setExistingAccountNumber(?string $existingAccountNumber): void
    {
        $this->existingAccountNumber = $existingAccountNumber;
    }

    /**
     * Returns Account.
     */
    public function getAccount(): ?Account
    {
        return $this->account;
    }

    /**
     * Sets Account.
     *
     * @maps account
     */
    public function setAccount(?Account $account): void
    {
        $this->account = $account;
    }

    /**
     * Returns Update Subscription Subscriptions.
     * Each item includes a set of order actions, which will be applied to the same base subscription.
     *
     * @return UpdateSubscriptionSubscription[]|null
     */
    public function getUpdateSubscriptionSubscriptions(): ?array
    {
        return $this->updateSubscriptionSubscriptions;
    }

    /**
     * Sets Update Subscription Subscriptions.
     * Each item includes a set of order actions, which will be applied to the same base subscription.
     *
     * @maps updateSubscriptionSubscriptions
     *
     * @param UpdateSubscriptionSubscription[]|null $updateSubscriptionSubscriptions
     */
    public function setUpdateSubscriptionSubscriptions(?array $updateSubscriptionSubscriptions): void
    {
        $this->updateSubscriptionSubscriptions = $updateSubscriptionSubscriptions;
    }

    /**
     * Returns Update Subscription Processing Options.
     * Invoice or Payment.
     */
    public function getUpdateSubscriptionProcessingOptions(): ?UpdateSubscriptionProcessingOptions
    {
        return $this->updateSubscriptionProcessingOptions;
    }

    /**
     * Sets Update Subscription Processing Options.
     * Invoice or Payment.
     *
     * @maps updateSubscriptionProcessingOptions
     */
    public function setUpdateSubscriptionProcessingOptions(
        ?UpdateSubscriptionProcessingOptions $updateSubscriptionProcessingOptions
    ): void {
        $this->updateSubscriptionProcessingOptions = $updateSubscriptionProcessingOptions;
    }

    /**
     * Returns Update Subscription Products.
     *
     * @return Product[]|null
     */
    public function getUpdateSubscriptionProducts(): ?array
    {
        return $this->updateSubscriptionProducts;
    }

    /**
     * Sets Update Subscription Products.
     *
     * @maps updateSubscriptionProducts
     *
     * @param Product[]|null $updateSubscriptionProducts
     */
    public function setUpdateSubscriptionProducts(?array $updateSubscriptionProducts): void
    {
        $this->updateSubscriptionProducts = $updateSubscriptionProducts;
    }

    /**
     * Returns Custom Fields.
     * Information about the payment related fields.
     *
     * @return CustomField[]|null
     */
    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    /**
     * Sets Custom Fields.
     * Information about the payment related fields.
     *
     * @maps customFields
     *
     * @param CustomField[]|null $customFields
     */
    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    /**
     * Returns Payment Capture.
     */
    public function getPaymentCapture(): ?array
    {
        return $this->paymentCapture;
    }

    /**
     * Sets Payment Capture.
     *
     * @maps paymentCapture
     */
    public function setPaymentCapture(?array $paymentCapture): void
    {
        $this->paymentCapture = $paymentCapture;
    }

    /**
     * Converts the UpdateSubscription object to a human-readable string representation.
     *
     * @return string The string representation of the UpdateSubscription object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'UpdateSubscription',
            [
                'orderType' => $this->orderType,
                'orderNumber' => $this->orderNumber,
                'orderDate' => $this->orderDate,
                'description' => $this->description,
                'existingAccountNumber' => $this->existingAccountNumber,
                'account' => $this->account,
                'updateSubscriptionSubscriptions' => $this->updateSubscriptionSubscriptions,
                'updateSubscriptionProcessingOptions' => $this->updateSubscriptionProcessingOptions,
                'updateSubscriptionProducts' => $this->updateSubscriptionProducts,
                'customFields' => $this->customFields,
                'paymentCapture' => $this->paymentCapture
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
        $json['orderType']                               = OrderTypeEnum::checkValue($this->orderType);
        if (isset($this->orderNumber)) {
            $json['orderNumber']                         = $this->orderNumber;
        }
        if (isset($this->orderDate)) {
            $json['orderDate']                           = $this->orderDate;
        }
        if (isset($this->description)) {
            $json['description']                         = $this->description;
        }
        if (isset($this->existingAccountNumber)) {
            $json['existingAccountNumber']               = $this->existingAccountNumber;
        }
        if (isset($this->account)) {
            $json['account']                             = $this->account;
        }
        if (isset($this->updateSubscriptionSubscriptions)) {
            $json['updateSubscriptionSubscriptions']     = $this->updateSubscriptionSubscriptions;
        }
        if (isset($this->updateSubscriptionProcessingOptions)) {
            $json['updateSubscriptionProcessingOptions'] = $this->updateSubscriptionProcessingOptions;
        }
        if (isset($this->updateSubscriptionProducts)) {
            $json['updateSubscriptionProducts']          = $this->updateSubscriptionProducts;
        }
        if (isset($this->customFields)) {
            $json['customFields']                        = $this->customFields;
        }
        if (isset($this->paymentCapture)) {
            $json['paymentCapture']                      = $this->paymentCapture;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
