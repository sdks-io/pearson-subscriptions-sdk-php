
# Custom Field

## Structure

`CustomField`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | Custom field name defined for future use | getName(): ?string | setName(?string name): void |
| `value` | `?string` | Optional | Custom field value for future use.  paymentMethod__c is Payment Gateway PayPal or CyberSource or REDEMPTION; paymentToken__c is PayPal or CyberSource token. | getValue(): ?string | setValue(?string value): void |

## Example (as JSON)

```json
{
  "name": "name8",
  "value": "value0"
}
```

