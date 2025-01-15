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
 * Contact details associated with an account.
 */
class BillToContactPostOrder implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $address1;

    /**
     * @var string|null
     */
    private $address2;

    /**
     * @var string|null
     */
    private $city;

    /**
     * @var string|null
     */
    private $country;

    /**
     * @var string|null
     */
    private $county;

    /**
     * @var string|null
     */
    private $firstName;

    /**
     * @var string|null
     */
    private $lastName;

    /**
     * @var string|null
     */
    private $mobilePhone;

    /**
     * @var string|null
     */
    private $personalEmail;

    /**
     * @var string|null
     */
    private $postalCode;

    /**
     * @var string|null
     */
    private $state;

    /**
     * @var string|null
     */
    private $workEmail;

    /**
     * @var string|null
     */
    private $workPhone;

    /**
     * Returns Address 1.
     * First line of the contact's address. This is often a street address or a business name.
     */
    public function getAddress1(): ?string
    {
        return $this->address1;
    }

    /**
     * Sets Address 1.
     * First line of the contact's address. This is often a street address or a business name.
     *
     * @maps address1
     */
    public function setAddress1(?string $address1): void
    {
        $this->address1 = $address1;
    }

    /**
     * Returns Address 2.
     * Second line of the contact's address.
     */
    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    /**
     * Sets Address 2.
     * Second line of the contact's address.
     *
     * @maps address2
     */
    public function setAddress2(?string $address2): void
    {
        $this->address2 = $address2;
    }

    /**
     * Returns City.
     * City of the contact's address.
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * Sets City.
     * City of the contact's address.
     *
     * @maps city
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * Returns Country.
     * Country; must be a valid country name or abbreviation. If using Zuora Tax, you must specify a
     * country in the bill-to contact to calculate tax.
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * Sets Country.
     * Country; must be a valid country name or abbreviation. If using Zuora Tax, you must specify a
     * country in the bill-to contact to calculate tax.
     *
     * @maps country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * Returns County.
     * County of the contact's address.
     */
    public function getCounty(): ?string
    {
        return $this->county;
    }

    /**
     * Sets County.
     * County of the contact's address.
     *
     * @maps county
     */
    public function setCounty(?string $county): void
    {
        $this->county = $county;
    }

    /**
     * Returns First Name.
     * First name of the contact.
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * Sets First Name.
     * First name of the contact.
     *
     * @maps firstName
     */
    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns Last Name.
     * Last name of the contact.
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Sets Last Name.
     * Last name of the contact.
     *
     * @maps lastName
     */
    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * Returns Mobile Phone.
     * Mobile phone number of the contact.
     */
    public function getMobilePhone(): ?string
    {
        return $this->mobilePhone;
    }

    /**
     * Sets Mobile Phone.
     * Mobile phone number of the contact.
     *
     * @maps mobilePhone
     */
    public function setMobilePhone(?string $mobilePhone): void
    {
        $this->mobilePhone = $mobilePhone;
    }

    /**
     * Returns Personal Email.
     * Personal email address of the contact.
     */
    public function getPersonalEmail(): ?string
    {
        return $this->personalEmail;
    }

    /**
     * Sets Personal Email.
     * Personal email address of the contact.
     *
     * @maps personalEmail
     */
    public function setPersonalEmail(?string $personalEmail): void
    {
        $this->personalEmail = $personalEmail;
    }

    /**
     * Returns Postal Code.
     * ZIP code or other postal code of the contact's address.
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * Sets Postal Code.
     * ZIP code or other postal code of the contact's address.
     *
     * @maps postalCode
     */
    public function setPostalCode(?string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    /**
     * Returns State.
     * State or province of the contact's address.
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * Sets State.
     * State or province of the contact's address.
     *
     * @maps state
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    /**
     * Returns Work Email.
     * Business email address of the contact.
     */
    public function getWorkEmail(): ?string
    {
        return $this->workEmail;
    }

    /**
     * Sets Work Email.
     * Business email address of the contact.
     *
     * @maps workEmail
     */
    public function setWorkEmail(?string $workEmail): void
    {
        $this->workEmail = $workEmail;
    }

    /**
     * Returns Work Phone.
     * Business phone number of the contact.
     */
    public function getWorkPhone(): ?string
    {
        return $this->workPhone;
    }

    /**
     * Sets Work Phone.
     * Business phone number of the contact.
     *
     * @maps workPhone
     */
    public function setWorkPhone(?string $workPhone): void
    {
        $this->workPhone = $workPhone;
    }

    /**
     * Converts the BillToContactPostOrder object to a human-readable string representation.
     *
     * @return string The string representation of the BillToContactPostOrder object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'BillToContactPostOrder',
            [
                'address1' => $this->address1,
                'address2' => $this->address2,
                'city' => $this->city,
                'country' => $this->country,
                'county' => $this->county,
                'firstName' => $this->firstName,
                'lastName' => $this->lastName,
                'mobilePhone' => $this->mobilePhone,
                'personalEmail' => $this->personalEmail,
                'postalCode' => $this->postalCode,
                'state' => $this->state,
                'workEmail' => $this->workEmail,
                'workPhone' => $this->workPhone
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
        if (isset($this->address1)) {
            $json['address1']      = $this->address1;
        }
        if (isset($this->address2)) {
            $json['address2']      = $this->address2;
        }
        if (isset($this->city)) {
            $json['city']          = $this->city;
        }
        if (isset($this->country)) {
            $json['country']       = $this->country;
        }
        if (isset($this->county)) {
            $json['county']        = $this->county;
        }
        if (isset($this->firstName)) {
            $json['firstName']     = $this->firstName;
        }
        if (isset($this->lastName)) {
            $json['lastName']      = $this->lastName;
        }
        if (isset($this->mobilePhone)) {
            $json['mobilePhone']   = $this->mobilePhone;
        }
        if (isset($this->personalEmail)) {
            $json['personalEmail'] = $this->personalEmail;
        }
        if (isset($this->postalCode)) {
            $json['postalCode']    = $this->postalCode;
        }
        if (isset($this->state)) {
            $json['state']         = $this->state;
        }
        if (isset($this->workEmail)) {
            $json['workEmail']     = $this->workEmail;
        }
        if (isset($this->workPhone)) {
            $json['workPhone']     = $this->workPhone;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
