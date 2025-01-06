
# Discount

## Structure

`Discount`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `discountAmount` | `?float` | Optional | Only applicable if the discount charge is a fixed-amount discount. | getDiscountAmount(): ?float | setDiscountAmount(?float discountAmount): void |
| `discountPercentage` | `?float` | Optional | Only applicable if the discount charge is a percentage discount | getDiscountPercentage(): ?float | setDiscountPercentage(?float discountPercentage): void |

## Example (as JSON)

```json
{
  "discountAmount": 211.28,
  "discountPercentage": 228.18
}
```

