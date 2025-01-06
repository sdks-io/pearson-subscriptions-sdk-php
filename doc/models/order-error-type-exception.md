
# Order Error Type Exception

## Structure

`OrderErrorTypeException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `orderNumber` | `?string` | Optional | Order Number. | getOrderNumber(): ?string | setOrderNumber(?string orderNumber): void |
| `orderError` | [`?OrderError`](../../doc/models/order-error.md) | Optional | - | getOrderError(): ?OrderError | setOrderError(?OrderError orderError): void |

## Example (as JSON)

```json
{
  "orderNumber": "S12345",
  "orderError": {
    "code": "code4",
    "message": "message6"
  }
}
```

