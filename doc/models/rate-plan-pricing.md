
# Rate Plan Pricing

## Structure

`RatePlanPricing`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `discount` | [`?Discount`](../../doc/models/discount.md) | Optional | - | getDiscount(): ?Discount | setDiscount(?Discount discount): void |
| `recurringFlatFee` | [`?RecurringFlatFee`](../../doc/models/recurring-flat-fee.md) | Optional | - | getRecurringFlatFee(): ?RecurringFlatFee | setRecurringFlatFee(?RecurringFlatFee recurringFlatFee): void |

## Example (as JSON)

```json
{
  "discount": {
    "discountAmount": 252.52,
    "discountPercentage": 13.42
  },
  "recurringFlatFee": {
    "listPrice": 233.52
  }
}
```

