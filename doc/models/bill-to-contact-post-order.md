
# Bill to Contact Post Order

Contact details associated with an account.

## Structure

`BillToContactPostOrder`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `address1` | `?string` | Optional | First line of the contact's address. This is often a street address or a business name.<br>**Constraints**: *Maximum Length*: `255` | getAddress1(): ?string | setAddress1(?string address1): void |
| `address2` | `?string` | Optional | Second line of the contact's address.<br>**Constraints**: *Maximum Length*: `255` | getAddress2(): ?string | setAddress2(?string address2): void |
| `city` | `?string` | Optional | City of the contact's address.<br>**Constraints**: *Maximum Length*: `40` | getCity(): ?string | setCity(?string city): void |
| `country` | `?string` | Optional | Country; must be a valid country name or abbreviation. If using Zuora Tax, you must specify a country in the bill-to contact to calculate tax.<br>**Constraints**: *Maximum Length*: `64` | getCountry(): ?string | setCountry(?string country): void |
| `county` | `?string` | Optional | County of the contact's address.<br>**Constraints**: *Maximum Length*: `32` | getCounty(): ?string | setCounty(?string county): void |
| `firstName` | `?string` | Optional | First name of the contact.<br>**Constraints**: *Maximum Length*: `100` | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | Last name of the contact.<br>**Constraints**: *Maximum Length*: `100` | getLastName(): ?string | setLastName(?string lastName): void |
| `mobilePhone` | `?string` | Optional | Mobile phone number of the contact.<br>**Constraints**: *Maximum Length*: `40` | getMobilePhone(): ?string | setMobilePhone(?string mobilePhone): void |
| `personalEmail` | `?string` | Optional | Personal email address of the contact.<br>**Constraints**: *Maximum Length*: `80` | getPersonalEmail(): ?string | setPersonalEmail(?string personalEmail): void |
| `postalCode` | `?string` | Optional | ZIP code or other postal code of the contact's address.<br>**Constraints**: *Maximum Length*: `20` | getPostalCode(): ?string | setPostalCode(?string postalCode): void |
| `state` | `?string` | Optional | State or province of the contact's address.<br>**Constraints**: *Maximum Length*: `40` | getState(): ?string | setState(?string state): void |
| `workEmail` | `?string` | Optional | Business email address of the contact.<br>**Constraints**: *Maximum Length*: `80` | getWorkEmail(): ?string | setWorkEmail(?string workEmail): void |
| `workPhone` | `?string` | Optional | Business phone number of the contact.<br>**Constraints**: *Maximum Length*: `40` | getWorkPhone(): ?string | setWorkPhone(?string workPhone): void |

## Example (as JSON)

```json
{
  "address1": "1051 E Hillsdale Blvd",
  "address2": "Santon street main",
  "city": "Durham",
  "country": "United States",
  "county": "Durham",
  "firstName": "Alex",
  "lastName": "Matthew",
  "mobilePhone": "1234567890",
  "personalEmail": "personal@email.com",
  "postalCode": "27703",
  "state": "NC",
  "workPhone": "1234567890"
}
```

