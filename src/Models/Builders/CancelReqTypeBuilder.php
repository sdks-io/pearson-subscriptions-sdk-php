<?php

declare(strict_types=1);

/*
 * PearsonSubscriptionsAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PearsonSubscriptionsAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use PearsonSubscriptionsAPILib\Models\CancelReqType;

/**
 * Builder for model CancelReqType
 *
 * @see CancelReqType
 */
class CancelReqTypeBuilder
{
    /**
     * @var CancelReqType
     */
    private $instance;

    private function __construct(CancelReqType $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Cancel Req Type Builder object.
     *
     * @param string $subscriptionId
     * @param string $subscriptionSource
     * @param string $cancelReason
     * @param string $cancelDate
     */
    public static function init(
        string $subscriptionId,
        string $subscriptionSource,
        string $cancelReason,
        string $cancelDate
    ): self {
        return new self(new CancelReqType($subscriptionId, $subscriptionSource, $cancelReason, $cancelDate));
    }

    /**
     * Initializes a new Cancel Req Type object.
     */
    public function build(): CancelReqType
    {
        return CoreHelper::clone($this->instance);
    }
}
