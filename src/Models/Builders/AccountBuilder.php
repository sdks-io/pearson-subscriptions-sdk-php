<?php

declare(strict_types=1);

/*
 * PplusSubscriptionPapiLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PplusSubscriptionPapiLib\Models\Builders;

use Core\Utils\CoreHelper;
use PplusSubscriptionPapiLib\Models\Account;
use PplusSubscriptionPapiLib\Models\BillToContactPostOrder;

/**
 * Builder for model Account
 *
 * @see Account
 */
class AccountBuilder
{
    /**
     * @var Account
     */
    private $instance;

    private function __construct(Account $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Account Builder object.
     */
    public static function init(): self
    {
        return new self(new Account());
    }

    /**
     * Sets account Number field.
     *
     * @param string|null $value
     */
    public function accountNumber(?string $value): self
    {
        $this->instance->setAccountNumber($value);
        return $this;
    }

    /**
     * Sets additional Email Addresses field.
     *
     * @param string|null $value
     */
    public function additionalEmailAddresses(?string $value): self
    {
        $this->instance->setAdditionalEmailAddresses($value);
        return $this;
    }

    /**
     * Sets customer Service Rep Name field.
     *
     * @param string|null $value
     */
    public function customerServiceRepName(?string $value): self
    {
        $this->instance->setCustomerServiceRepName($value);
        return $this;
    }

    /**
     * Sets purchase Order Number field.
     *
     * @param string|null $value
     */
    public function purchaseOrderNumber(?string $value): self
    {
        $this->instance->setPurchaseOrderNumber($value);
        return $this;
    }

    /**
     * Sets sales Rep field.
     *
     * @param string|null $value
     */
    public function salesRep(?string $value): self
    {
        $this->instance->setSalesRep($value);
        return $this;
    }

    /**
     * Sets sequence Set Id field.
     *
     * @param string|null $value
     */
    public function sequenceSetId(?string $value): self
    {
        $this->instance->setSequenceSetId($value);
        return $this;
    }

    /**
     * Sets allow Invoice Edit field.
     *
     * @param bool|null $value
     */
    public function allowInvoiceEdit(?bool $value): self
    {
        $this->instance->setAllowInvoiceEdit($value);
        return $this;
    }

    /**
     * Sets name field.
     *
     * @param string|null $value
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets currency field.
     *
     * @param string|null $value
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
        return $this;
    }

    /**
     * Sets bill Cycle Day field.
     *
     * @param int|null $value
     */
    public function billCycleDay(?int $value): self
    {
        $this->instance->setBillCycleDay($value);
        return $this;
    }

    /**
     * Sets invoice Delivery Prefs Print field.
     *
     * @param bool|null $value
     */
    public function invoiceDeliveryPrefsPrint(?bool $value): self
    {
        $this->instance->setInvoiceDeliveryPrefsPrint($value);
        return $this;
    }

    /**
     * Sets invoice Delivery Prefs Email field.
     *
     * @param bool|null $value
     */
    public function invoiceDeliveryPrefsEmail(?bool $value): self
    {
        $this->instance->setInvoiceDeliveryPrefsEmail($value);
        return $this;
    }

    /**
     * Sets auto Pay field.
     *
     * @param bool|null $value
     */
    public function autoPay(?bool $value): self
    {
        $this->instance->setAutoPay($value);
        return $this;
    }

    /**
     * Sets payment Term field.
     *
     * @param string|null $value
     */
    public function paymentTerm(?string $value): self
    {
        $this->instance->setPaymentTerm($value);
        return $this;
    }

    /**
     * Sets communication Profile Id field.
     *
     * @param string|null $value
     */
    public function communicationProfileId(?string $value): self
    {
        $this->instance->setCommunicationProfileId($value);
        return $this;
    }

    /**
     * Sets batch field.
     *
     * @param string|null $value
     */
    public function batch(?string $value): self
    {
        $this->instance->setBatch($value);
        return $this;
    }

    /**
     * Sets invoice Template Id field.
     *
     * @param string|null $value
     */
    public function invoiceTemplateId(?string $value): self
    {
        $this->instance->setInvoiceTemplateId($value);
        return $this;
    }

    /**
     * Sets debit Memo Template Id field.
     *
     * @param string|null $value
     */
    public function debitMemoTemplateId(?string $value): self
    {
        $this->instance->setDebitMemoTemplateId($value);
        return $this;
    }

    /**
     * Sets credit Memo Template Id field.
     *
     * @param string|null $value
     */
    public function creditMemoTemplateId(?string $value): self
    {
        $this->instance->setCreditMemoTemplateId($value);
        return $this;
    }

    /**
     * Sets bill To Contact field.
     *
     * @param BillToContactPostOrder|null $value
     */
    public function billToContact(?BillToContactPostOrder $value): self
    {
        $this->instance->setBillToContact($value);
        return $this;
    }

    /**
     * Sets sold To Contact field.
     *
     * @param BillToContactPostOrder|null $value
     */
    public function soldToContact(?BillToContactPostOrder $value): self
    {
        $this->instance->setSoldToContact($value);
        return $this;
    }

    /**
     * Initializes a new Account object.
     */
    public function build(): Account
    {
        return CoreHelper::clone($this->instance);
    }
}
