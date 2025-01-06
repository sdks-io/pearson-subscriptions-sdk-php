
# Order Resp Type Error Exception

## Structure

`OrderRespTypeErrorException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `orderNumber` | `?string` | Optional | Order Number. | getOrderNumber(): ?string | setOrderNumber(?string orderNumber): void |
| `subscriptionId` | `?string` | Optional | Pearson subscription id. | getSubscriptionId(): ?string | setSubscriptionId(?string subscriptionId): void |
| `orderRespError` | [`?OrderRespError`](../../doc/models/order-resp-error.md) | Optional | - | getOrderRespError(): ?OrderRespError | setOrderRespError(?OrderRespError orderRespError): void |

## Example (as JSON)

```json
{
  "orderNumber": "S12345",
  "subscriptionId": "S12345",
  "orderRespError": {
    "code": "E40",
    "message": "message6"
  }
}
```

