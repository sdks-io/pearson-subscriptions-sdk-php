<?php

declare(strict_types=1);

/*
 * PplusSubscriptionPapiLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PplusSubscriptionPapiLib\Exceptions;

use PplusSubscriptionPapiLib\ApiHelper;

class InvalidReqTypeException extends ApiException
{
    /**
     * @var \PplusSubscriptionPapiLib\Models\InvalidReqTypeError|null
     */
    private $invalidReqTypeError;

    /**
     * Returns Invalid Req Type Error.
     */
    public function getInvalidReqTypeError(): ?\PplusSubscriptionPapiLib\Models\InvalidReqTypeError
    {
        return $this->invalidReqTypeError;
    }

    /**
     * Sets Invalid Req Type Error.
     *
     * @maps InvalidReqTypeError
     */
    public function setInvalidReqTypeError(
        ?\PplusSubscriptionPapiLib\Models\InvalidReqTypeError $invalidReqTypeError
    ): void {
        $this->invalidReqTypeError = $invalidReqTypeError;
    }

    /**
     * Converts the InvalidReqTypeException object to a human-readable string representation.
     *
     * @return string The string representation of the InvalidReqTypeException object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'InvalidReqTypeException',
            ['invalidReqTypeError' => $this->invalidReqTypeError],
            parent::__toString()
        );
    }
}
